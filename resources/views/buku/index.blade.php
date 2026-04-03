@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-light text-gray-800">Data Kategori / Produk</h1>
    </div>

    <div class="bg-white border-t-2 border-blue-500 shadow-sm rounded-b-md overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-white">
            <h3 class="text-lg font-normal text-gray-800">Katalog Produk Tersedia</h3>
            <button onclick="document.getElementById('modalTambahBuku').classList.remove('hidden')"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm font-medium transition flex items-center gap-2">
                <i class="fas fa-plus"></i> Tambah Produk
            </button>
        </div>

        <div class="overflow-x-auto p-4">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b-2 border-gray-200 text-sm text-gray-800">
                        <th class="p-3 font-bold">ID</th>
                        <th class="p-3 font-bold">Nama Produk / Judul</th>
                        <th class="p-3 font-bold">Kategori / Pengarang</th>
                        <th class="p-3 font-bold">Tahun</th>
                        <th class="p-3 font-bold text-center">Stok</th>
                        <th class="p-3 font-bold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bukus as $row)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="p-3 text-sm text-gray-600">#{{ $row->id }}</td>
                            <td class="p-3 text-sm text-gray-800 font-medium">{{ $row->judul }}</td>
                            <td class="p-3 text-sm text-gray-600">{{ $row->pengarang }} ({{ $row->penerbit }})</td>
                            <td class="p-3 text-sm text-gray-600">{{ $row->tahun_terbit }}</td>
                            <td class="p-3 text-center">
                                <span
                                    class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full text-xs font-bold">{{ $row->stok }}</span>
                            </td>
                            <td class="p-3 text-center">
                                <form action="/buku/{{ $row->id }}" method="POST" id="form-hapus-buku-{{ $row->id }}"
                                    class="m-0 inline-block">
                                    @csrf @method('DELETE')
                                    <button type="button" onclick="konfirmasiHapusBuku({{ $row->id }})"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-xs font-bold transition flex items-center gap-1 shadow-sm">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="modalTambahBuku" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md overflow-hidden">
            <div class="bg-blue-600 px-6 py-4 flex justify-between items-center text-white">
                <h3 class="font-bold text-lg">Tambah Produk / Buku Baru</h3>
                <button onclick="document.getElementById('modalTambahBuku').classList.add('hidden')"
                    class="text-white hover:text-gray-200 text-2xl leading-none">&times;</button>
            </div>
            <form action="/buku" method="POST" class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Judul / Nama Produk</label>
                    <input type="text" name="judul" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Pengarang</label>
                        <input type="text" name="pengarang" required
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Penerbit</label>
                        <input type="text" name="penerbit" required
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Tahun</label>
                        <input type="number" name="tahun_terbit" required
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Stok Awal</label>
                        <input type="number" name="stok" required
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>
                <div class="pt-4 flex justify-end gap-2">
                    <button type="button" onclick="document.getElementById('modalTambahBuku').classList.add('hidden')"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded font-medium transition">Batal</button>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-medium transition">Simpan
                        Produk</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function konfirmasiHapusBuku(id) {
            Swal.fire({
                title: 'Hapus Produk?', text: 'Data produk ini akan dihapus.', icon: 'warning', showCancelButton: true, confirmButtonColor: '#dc2626', confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) document.getElementById('form-hapus-buku-' + id).submit();
            })
        }
    </script>
@endsection