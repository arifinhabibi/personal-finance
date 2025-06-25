@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('content')
<div class="p-6">
    <!-- Add Transaction Button -->
    <button onclick="openAddModal()" class="mb-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
        <i class="fas fa-plus mr-2"></i> Tambahkan Transaksi
    </button>

    <!-- Transaction Table -->
    <div class="overflow-x-auto">
        <table class="w-full bg-white rounded-lg shadow">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Kategori</th>
                    <th class="p-3">Tipe</th>
                    <th class="p-3">Jumlah</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transaksis as $transaksi)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-3">{{ $transaksi->date }}</td>
                        <td class="p-3">{{ $transaksi->category }}</td>
                        <td class="p-3">
                            <span class="px-2 py-1 rounded-full text-xs 
                                {{ $transaksi->type === 'pemasukan' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ ucfirst($transaksi->type) }}
                            </span>
                        </td>
                        <td class="p-3 font-medium">
                            Rp {{ number_format($transaksi->amount, 0, ',', '.') }}
                        </td>
                        <td class="p-3">
                            <div class="flex space-x-2">
                                <!-- Detail Button -->
                                <button onclick="openDetailModal('{{ $transaksi->date }}', '{{ $transaksi->category }}', '{{ $transaksi->type }}', '{{ number_format($transaksi->amount, 0, ',', '.') }}', '{{ $transaksi->description }}')" 
                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-full">
                                    <i class="fas fa-eye"></i>
                                </button>
                                
                                <!-- Edit Button -->
                                <button onclick="openEditModal('{{ $transaksi->id }}', '{{ $transaksi->date }}', '{{ $transaksi->category }}', '{{ $transaksi->type }}', '{{ $transaksi->amount }}', '{{ $transaksi->description }}')" 
                                    class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-full">
                                    <i class="fas fa-edit"></i>
                                </button>
                                
                                <!-- Delete Button -->
                                <form id="delete-form-{{ $transaksi->id }}" action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete('{{ $transaksi->id }}')" 
                                        class="p-2 text-red-600 hover:bg-red-50 rounded-full">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">
                            <i class="fas fa-info-circle mr-2"></i> Belum ada transaksi.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if ($transaksis->hasPages())
            <div class="mt-4">
                {{ $transaksis->links() }}
            </div>
        @endif
    </div>

    <!-- Add/Edit Modal -->
    <div id="addEditModalOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <div class="flex justify-between items-center border-b p-4">
                <h3 id="modalTitle" class="text-lg font-semibold">Tambah Transaksi Baru</h3>
                <button onclick="closeAddEditModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="p-4">
                <form id="transactionForm" method="POST">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="editId" name="id">
                    
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" id="date" name="date" required 
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                        <select id="category" name="category" required
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Pilih Kategori</option>
                            <option value="Gaji">Gaji</option>
                            <option value="Belanja">Belanja</option>
                            <option value="Hiburan">Hiburan</option>
                            <option value="Transportasi">Transportasi</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tipe Transaksi</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="type" value="pemasukan" checked 
                                    class="form-radio h-4 w-4 text-blue-600">
                                <span class="ml-2">Pemasukan</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="type" value="pengeluaran"
                                    class="form-radio h-4 w-4 text-blue-600">
                                <span class="ml-2">Pengeluaran</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Jumlah (Rp)</label>
                        <input type="number" id="amount" name="amount" required 
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="0">
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Keterangan (Opsional)</label>
                        <textarea id="description" name="description" rows="2"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                
                    <div class="flex justify-end space-x-2 border-t p-4">
                        <button type="button" onclick="closeAddEditModal()" 
                            class="px-4 py-2 border rounded-lg hover:bg-gray-100 transition-colors">
                            Batal
                        </button>
                        <button type="submit" 
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Simpan Transaksi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Detail Modal -->
    <div id="detailModalOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <div class="flex justify-between items-center border-b p-4">
                <h3 class="text-lg font-semibold">Detail Transaksi</h3>
                <button onclick="closeDetailModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="p-4">
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-500">Tanggal</h4>
                    <p id="detailDate" class="text-lg"></p>
                </div>
                
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-500">Kategori</h4>
                    <p id="detailCategory" class="text-lg"></p>
                </div>
                
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-500">Tipe</h4>
                    <p id="detailType" class="text-lg"></p>
                </div>
                
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-500">Jumlah</h4>
                    <p id="detailAmount" class="text-lg font-semibold"></p>
                </div>
                
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-500">Keterangan</h4>
                    <p id="detailDescription" class="text-lg"></p>
                </div>
            </div>
            
            <div class="flex justify-end border-t p-4">
                <button onclick="closeDetailModal()" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Add Modal
    function openAddModal() {
        document.getElementById('modalTitle').textContent = 'Tambah Transaksi Baru';
        document.getElementById('transactionForm').action = "{{ route('transaksi.store') }}";
        document.getElementById('formMethod').value = 'POST';
        document.getElementById('editId').value = '';
        document.getElementById('transactionForm').reset();
        document.querySelector('input[name="type"][value="pemasukan"]').checked = true;
        
        document.getElementById('addEditModalOverlay').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    // Edit Modal
    function openEditModal(id, date, category, type, amount, description) {
        document.getElementById('modalTitle').textContent = 'Edit Transaksi';
        document.getElementById('transactionForm').action = `/transaksi/${id}`;
        document.getElementById('formMethod').value = 'PUT';
        document.getElementById('editId').value = id;
        document.getElementById('date').value = date;
        document.getElementById('category').value = category;
        
        document.querySelectorAll('input[name="type"]').forEach(radio => {
            radio.checked = (radio.value === type);
        });
        
        document.getElementById('amount').value = amount;
        document.getElementById('description').value = description || '';
        
        document.getElementById('addEditModalOverlay').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeAddEditModal() {
        document.getElementById('addEditModalOverlay').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    // Detail Modal
    function openDetailModal(date, category, type, amount, description) {
        document.getElementById('detailDate').textContent = date;
        document.getElementById('detailCategory').textContent = category;
        document.getElementById('detailType').textContent = type.charAt(0).toUpperCase() + type.slice(1);
        document.getElementById('detailAmount').textContent = 'Rp ' + amount;
        document.getElementById('detailDescription').textContent = description || '-';
        
        document.getElementById('detailModalOverlay').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeDetailModal() {
        document.getElementById('detailModalOverlay').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    // Delete Confirmation
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus transaksi ini?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }

    // Close modals when clicking outside or pressing Escape
    document.getElementById('addEditModalOverlay').addEventListener('click', function(e) {
        if (e.target === this) closeAddEditModal();
    });

    document.getElementById('detailModalOverlay').addEventListener('click', function(e) {
        if (e.target === this) closeDetailModal();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeAddEditModal();
            closeDetailModal();
        }
    });
</script>
@endsection