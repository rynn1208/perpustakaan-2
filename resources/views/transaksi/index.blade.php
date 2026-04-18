@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-light text-gray-800">Laporan Peminjaman</h1>
    </div>

    <div class="bg-white border-t-2 border-blue-500 shadow-sm rounded-b-md overflow-hidden">

        <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-white">
            <h3 class="text-lg font-normal text-gray-800">Riwayat Peminjaman Keseluruhan</h3>
        </div>

        <div class="overflow-x-auto p-4">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b-2 border-gray-200 text-sm text-gray-800">
                        <th class="p-3 font-bold">No</th>
                        <th class="p-3 font-bold">Nama Peminjam</th>
                        <th class="p-3 font-bold">Judul Buku / Produk</th>
                        <th class="p-3 font-bold">Tgl Pinjam</th>
                        <th class="p-3 font-bold">Tgl Kembali</th>
                        <th class="p-3 font-bold text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksis as $index => $row)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="p-3 text-sm text-gray-600">{{ $index + 1 }}</td>
                            <td class="p-3 text-sm text-gray-800 font-medium">
                                <i class="fas fa-user-circle text-gray-400 mr-1"></i>
                                {{ $row->user->name ?? 'User Dihapus' }}
                            </td>
                            <td class="p-3 text-sm text-gray-600">
                                <i class="fas fa-book text-gray-400 mr-1"></i>
                                {{ $row->buku->judul ?? 'Buku Dihapus' }}
                            </td>
                            <td class="p-3 text-sm text-gray-600">{{ $row->tanggal_pinjam }}</td>
                            <td class="p-3 text-sm text-gray-600">{{ $row->tanggal_kembali ?? '-' }}</td>
                            <td class="p-3 text-center">
                                @if(strtolower($row->status) == 'dipinjam')
                                    <span
                                        class="bg-amber-100 text-amber-700 border border-amber-200 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                                        <i class="fas fa-clock mr-1"></i> Dipinjam
                                    </span>
                                @else
                                    <span
                                        class="bg-green-100 text-green-700 border border-green-200 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                                        <i class="fas fa-check-circle mr-1"></i> Selesai
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection