<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransactionsExport;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class LaporanController extends Controller
{
        
    public function index(Request $request)
    {
        $userId = Auth::id(); // Ambil ID user yang sedang login

        $query = Transaction::where('user_id', $userId);

        if ($request->dari) {
            $query->where('date', '>=', $request->dari);
        }

        if ($request->sampai) {
            $query->where('date', '<=', $request->sampai);
        }

        $transactions = $query->latest()->paginate(10);

        $totalPemasukan = Transaction::where('user_id', $userId)
            ->where('type', 'pemasukan')
            ->when($request->dari, fn($q) => $q->where('date', '>=', $request->dari))
            ->when($request->sampai, fn($q) => $q->where('date', '<=', $request->sampai))
            ->sum('amount');

        $totalPengeluaran = Transaction::where('user_id', $userId)
            ->where('type', 'pengeluaran')
            ->when($request->dari, fn($q) => $q->where('date', '>=', $request->dari))
            ->when($request->sampai, fn($q) => $q->where('date', '<=', $request->sampai))
            ->sum('amount');

        $saldo = $totalPemasukan - $totalPengeluaran;

        return view('laporan.index', compact('transactions', 'totalPemasukan', 'totalPengeluaran', 'saldo'));
    }

    public function export(Request $request)
    {
        $request->validate([
            'dari' => 'required|date',
            'sampai' => 'required|date|after_or_equal:dari'
        ]);

        $userId = Auth::id();
        $filename = 'laporan-transaksi-' . now()->format('Y-m-d') . '.xlsx';

        return Excel::download(
            new TransactionsExport($userId, $request->dari, $request->sampai),
            $filename,
            \Maatwebsite\Excel\Excel::XLSX,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="'.$filename.'"',
                'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
                'Expires' => '0'
            ]
        );
    }

}