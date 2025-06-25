@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Tambah Transaksi</h2>

    <form method="POST" action="{{ route('transaksi.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold">Jenis Transaksi</label>
            <select name="type" class="w-full border rounded p-2">
                <option value="pemasukan">Pemasukan</option>
                <option value="pengeluaran">Pengeluaran</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Kategori</label>
            <input type="text" name="category" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Jumlah (Rp)</label>
            <input type="number" name="amount" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Tanggal</label>
            <input type="date" name="date" class="w-full border rounded p-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection