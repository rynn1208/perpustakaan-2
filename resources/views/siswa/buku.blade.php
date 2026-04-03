@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-light text-gray-800">Katalog Produk</h1>
        <p class="text-gray-500 mt-1">Pilih produk atau buku yang ingin Anda proses.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($bukus as $row)
            <div
                class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition duration-300 flex flex-col">
                <div class="bg-blue-50 border-b border-blue-100 p-4 text-center">
                    <i class="fa-solid fa-book text-4xl mb-2"></i>
                    <h3 class="font-bold text-gray-800 text-lg truncate" title="{{ $row->judul }}">{{ $row->judul }}</h3>
                    <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">{{ $row->pengarang }}</p>
                </div>

                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Penerbit:</span>
                            <span class="font-medium text-gray-700">{{ $row->penerbit }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Tahun:</span>
                            <span class="font-medium text-gray-700">{{ $row->tahun_terbit }}</span>
                        </div>
                        <div class="flex justify-between text-sm items-center border-t border-gray-100 pt-2 mt-2">
                            <span class="text-gray-500">Sisa Stok:</span>
                            @if($row->stok > 0)
                                <span class="bg-teal-100 text-teal-800 px-2 py-0.5 rounded text-xs font-bold">{{ $row->stok }}
                                    Tersedia</span>
                            @else
                                <span class="bg-red-100 text-red-800 px-2 py-0.5 rounded text-xs font-bold">Habis</span>
                            @endif
                        </div>
                    </div>

                    <form action="/peminjaman/{{ $row->id }}" method="POST" id="form-pinjam-{{ $row->id }}" class="mt-auto">
                        @csrf

                        <div class="bg-gray-50 p-2 rounded border border-gray-200 mb-3">
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-wide mb-1">
                                <i class="fas fa-calendar-alt text-blue-400 mr-1"></i> Tgl Proses (Demo):
                            </label>
                            <input type="date" name="tanggal_pinjam_manual" value="{{ date('Y-m-d') }}"
                                class="w-full text-xs p-1.5 border border-gray-300 rounded focus:outline-none focus:border-blue-500 text-gray-700">
                        </div>

                        @if($row->stok > 0)
                            <button type="button" onclick="konfirmasiPinjam({{ $row->id }}, '{{ $row->judul }}')"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded transition flex justify-center items-center gap-2 text-sm shadow-sm">
                                <i class="fas fa-shopping-cart"></i> Proses Transaksi
                            </button>
                        @else
                            <button type="button" disabled
                                class="w-full bg-gray-300 text-gray-500 font-medium py-2 rounded cursor-not-allowed text-sm flex justify-center items-center gap-2">
                                <i class="fas fa-ban"></i> Stok Habis
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function konfirmasiPinjam(id, judul) {
            Swal.fire({
                title: 'Proses Transaksi?',
                html: `Anda akan memproses produk: <b>${judul}</b>`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#2563eb',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Proses Sekarang!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-pinjam-' + id).submit();
                }
            });
        }
    </script>
@endsection