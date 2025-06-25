<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Carbon\Carbon;

class TransactionsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithColumnFormatting
{
    protected $userId;
    protected $dari;
    protected $sampai;

    public function __construct($userId, $dari = null, $sampai = null)
    {
        $this->userId = $userId;
        $this->dari = $dari ? Carbon::parse($dari)->startOfDay() : null;
        $this->sampai = $sampai ? Carbon::parse($sampai)->endOfDay() : null;
    }

    public function collection()
    {
        $query = Transaction::where('user_id', $this->userId)
            ->when($this->dari, function($q) {
                $q->where('date', '>=', $this->dari);
            })
            ->when($this->sampai, function($q) {
                $q->where('date', '<=', $this->sampai);
            })
            ->orderBy('date', 'desc');

        return $query->get()->map(function ($transaction) {
            return [
                'Tanggal' => Carbon::parse($transaction->date)->format('d/m/Y'),
                'Kategori' => $transaction->category->name ?? '-',
                'Tipe' => ucfirst($transaction->type),
                'Jumlah' => $transaction->amount,
                'Keterangan' => $transaction->description ?? '-',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Kategori',
            'Tipe',
            'Jumlah (Rp)',
            'Keterangan'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Header row style
            1 => [
                'font' => ['bold' => true],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => 'D9E1F2']
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ]
            ],
            
            // Amount column right alignment
            'D' => [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                ]
            ],
            
            // Auto filter
            'A1:E1' => [
                'autoFilter' => true,
            ],
        ];
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'D' => '"Rp"#,##0.00;[Red]"Rp"-#,##0.00',
        ];
    }
}