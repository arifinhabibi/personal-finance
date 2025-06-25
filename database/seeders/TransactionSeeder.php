<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $transactions = [
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Gaji',
                'amount' => 5000000,
                'date' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Bonus',
                'amount' => 1000000,
                'date' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Belanja',
                'amount' => 750000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Transportasi',
                'amount' => 200000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'type' => 'pengeluaran',
                'category' => 'Hiburan',
                'amount' => 500000,
                'date' => now()->format('Y-m-d'),
            ],
            [
                'type' => 'pemasukan',
                'category' => 'Freelance',
                'amount' => 2500000,
                'date' => now()->addDays(2)->format('Y-m-d'),
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create([
                'user_id' => 5,
                'type' => $transaction['type'],
                'category' => $transaction['category'],
                'amount' => $transaction['amount'],
                'date' => $transaction['date'],
            ]);
        }
    }
}
