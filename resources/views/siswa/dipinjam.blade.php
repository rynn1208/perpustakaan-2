@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-light text-gray-800">Riwayat Transaksi Aktif</h1>
        <p class="text-gray-500 mt-1">Daftar produk yang sedang Anda proses atau pinjam saat ini.</p>
    </div>

    <div class="bg-white border-t-2 border-teal-500 shadow-sm rounded-b-md overflow-hidden">

        <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-white">
            <h3 class="text-lg font-normal text-gray-800">Status Produk Anda</h3>
        </div>

        <div class="overflow-x-auto p-4">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b-2 border-gray-200 text-sm text-gray-800">
                        <th class="p-3 font-bold">No</th>
                        <th class="p-3 font-bold">Judul Produk / Buku</th>
                        <th class="p-3 font-bold">Tgl Proses (Pinjam)</th>
                        <th class="p-3 font-bold text-center">Status</th>
                        <th class="p-3 font-bold text-center">Aksi / Penyelesaian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peminjamans as $index => $row)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="p-3 text-sm text-gray-600">{{ $index + 1 }}</td>
                            <td class="p-3 text-sm text-gray-800 font-medium">{{ $row->buku->judul ?? 'Produk Dihapus' }}</td>
                            <td class="p-3 text-sm text-gray-600">
                                <span class="bg-gray-100 px-2 py-1 rounded text-xs border border-gray-200">
                                    <i class="fas fa-calendar-day text-gray-400 mr-1"></i> {{ $row->tanggal_pinjam }}
                                </span>
                            </td>
                            <td class="p-3 text-center">
                                @if(strtolower($row->status) == 'dipinjam')
                                    <span
                                        class="bg-amber-100 text-amber-700 border border-amber-200 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                                        <i class="fas fa-spinner fa-spin mr-1"></i> Sedang Proses
                                    </span>
                                @else
                                    <span
                                        class="bg-green-100 text-green-700 border border-green-200 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                                        <i class="fas fa-check mr-1"></i> Selesai
                                    </span>
                                @endif
                            </td>
                            <td class="p-3">
                                @if(strtolower($row->status) == 'dipinjam')
                                    <form action="/kembalikan/{{ $row->id }}" method="POST" id="form-kembali-{{ $row->id }}"
                                        class="m-0 flex justify-center items-center gap-2">
                                        @csrf

                                        <div class="relative group" title="Simulasi Tanggal Selesai (Demo)">
                                            <input type="date" name="tanggal_kembali_manual" value="{{ date('Y-m-d') }}"
                                                class="w-32 text-xs p-1.5 border border-amber-300 bg-amber-50 rounded focus:outline-none focus:border-amber-500 text-gray-700 cursor-pointer">
                                            <span
                                                class="absolute -top-6 left-0 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition whitespace-nowrap pointer-events-none">
                                                Tgl Simulasi
                                            </span>
                                        </div>

                                        <button type="button"
                                            onclick="konfirmasiKembali({{ $row->id }}, '{{ $row->buku->judul ?? '' }}')"
                                            class="bg-teal-600 hover:bg-teal-700 text-white px-3 py-1.5 rounded text-xs font-bold transition shadow-sm whitespace-nowrap">
                                            <i class="fas fa-check-double mr-1"></i> Selesaikan
                                        </button>
                                    </form>
                                @else
                                    <div class="text-center">
                                        <span class="text-gray-400 text-sm font-medium italic"><i class="fas fa-lock"></i> Selesai
                                            pada {{ $row->tanggal_kembali }}</span>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Notifikasi Kuning (Kena Denda!)
            @if(session('warning'))
                Swal.fire({
                    title: 'Pemberitahuan!',
                    text: `{{ session('warning') }}`,
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b'
                });
            @endif
                    });

        function konfirmasiKembali(id, judul) {
            Swal.fire({
                title: 'Selesaikan Transaksi?',
                html: `Anda akan menyelesaikan proses untuk: <br><b>${judul}</b>`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#0d9488',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Selesaikan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-kembali-' + id).submit();
                }
            });
        }
    </script>
@endsection