<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Atau: request()->user()->id;
        $year = request('year', date('Y'));
        $month = request('month');
        $category = request('category');

        // Calculate totals
        $totalPemasukan = Transaction::where('user_id', $userId)
            ->where('type', 'pemasukan')
            ->whereYear('date', $year)
            ->when($month, fn($q) => $q->whereMonth('date', $month))
            ->sum('amount');

        $totalPengeluaran = Transaction::where('user_id', $userId)
            ->where('type', 'pengeluaran')
            ->whereYear('date', $year)
            ->when($month, fn($q) => $q->whereMonth('date', $month))
            ->sum('amount');

        $saldo = $totalPemasukan - $totalPengeluaran;

        // Monthly data
        $pemasukanBulanan = Transaction::where('user_id', $userId)
            ->whereYear('date', $year)
            ->when($month, fn($q) => $q->whereMonth('date', $month))
            ->where('type', 'pemasukan')
            ->selectRaw('MONTH(date) as month, SUM(amount) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $pengeluaranBulanan = Transaction::where('user_id', $userId)
            ->whereYear('date', $year)
            ->when($month, fn($q) => $q->whereMonth('date', $month))
            ->where('type', 'pengeluaran')
            ->selectRaw('MONTH(date) as month, SUM(amount) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Fill empty months with 0
        $allMonths = range(1, 12);
        $pemasukanBulanan = array_replace(array_fill_keys($allMonths, 0), $pemasukanBulanan);
        $pengeluaranBulanan = array_replace(array_fill_keys($allMonths, 0), $pengeluaranBulanan);

        // 5 transaksi terakhir user
        $recentTransactions = Transaction::where('user_id', $userId)
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($transaction) {
                $transaction->date = \Carbon\Carbon::parse($transaction->date);
                return $transaction;
            });

        // Pengeluaran berdasarkan kategori
        $expenseByCategory = Transaction::where('user_id', $userId)
            ->whereYear('date', $year)
            ->when($month, fn($q) => $q->whereMonth('date', $month))
            ->where('type', 'pengeluaran')
            ->when($category, fn($q) => $q->where('category', $category))
            ->selectRaw('category, SUM(amount) as total')
            ->groupBy('category')
            ->pluck('total', 'category')
            ->toArray();

        return view('dashboard', [
            'saldo' => $saldo,
            'totalIn' => $totalPemasukan,
            'totalOut' => $totalPengeluaran,
            'pemasukanBulanan' => $pemasukanBulanan,
            'pengeluaranBulanan' => $pengeluaranBulanan,
            'expenseByCategory' => $expenseByCategory,
            'categories' => Transaction::where('user_id', $userId)->distinct()->pluck('category'),
            'recentTransactions' => $recentTransactions
        ]);
    }
}