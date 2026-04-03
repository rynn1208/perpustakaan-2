@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-light text-gray-800">Manajemen User</h1>
    </div>

    <div class="bg-white border-t-2 border-blue-500 shadow-sm rounded-b-md overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-white">
            <h3 class="text-lg font-normal text-gray-800">Daftar Pengguna Sistem</h3>
            <button onclick="document.getElementById('modalTambah').classList.remove('hidden')"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm font-medium transition flex items-center gap-2">
                <i class="fas fa-user-plus"></i> Tambah User Baru
            </button>
        </div>

        <div class="overflow-x-auto p-4">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b-2 border-gray-200 text-sm text-gray-800">
                        <th class="p-3 font-bold">No</th>
                        <th class="p-3 font-bold">Nama Lengkap</th>
                        <th class="p-3 font-bold">Username Login</th>
                        <th class="p-3 font-bold">Hak Akses</th>
                        <th class="p-3 font-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anggotas as $index => $row)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="p-3 text-sm text-gray-600">{{ $index + 1 }}</td>
                            <td class="p-3 text-sm text-gray-800 font-medium">{{ $row->name }}</td>
                            <td class="p-3 text-sm text-gray-600">{{ $row->username }}</td>
                            <td class="p-3">
                                @if($row->role == 'admin')
                                    <span class="bg-red-500 text-white px-3 py-1 rounded text-xs font-bold shadow-sm">Admin</span>
                                @else
                                    <span class="bg-green-500 text-white px-3 py-1 rounded text-xs font-bold shadow-sm">Siswa
                                    </span>
                                @endif
                            </td>
                            <td class="p-3">
                                <form action="/anggota/{{ $row->id }}" method="POST" id="form-hapus-{{ $row->id }}"
                                    class="m-0 inline-block">
                                    @csrf @method('DELETE')
                                    <button type="button" onclick="konfirmasiHapus({{ $row->id }})"
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

    <div id="modalTambah" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md overflow-hidden">
            <div class="bg-blue-600 px-6 py-4 flex justify-between items-center text-white">
                <h3 class="font-bold text-lg">Tambah Pengguna Baru</h3>
                <button onclick="document.getElementById('modalTambah').classList.add('hidden')"
                    class="text-white hover:text-gray-200 text-2xl leading-none">&times;</button>
            </div>
            <form action="/anggota" method="POST" class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="name" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Username</label>
                    <input type="text" name="username" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
                <div class="pt-4 flex justify-end gap-2">
                    <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded font-medium transition">Batal</button>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-medium transition">Simpan
                        User</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function konfirmasiHapus(id) {
            Swal.fire({
                title: 'Hapus User?', text: 'Data pengguna ini akan dihapus permanen.', icon: 'warning', showCancelButton: true, confirmButtonColor: '#dc2626', confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) document.getElementById('form-hapus-' + id).submit();
            })
        }
    </script>
@endsection