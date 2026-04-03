@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-light text-gray-800 tracking-wide">Dashboard</h1>
        <p class="text-gray-500 mt-1 text-sm font-medium">Selamat Datang, <strong
                class="text-gray-800">{{ Auth::user()->name }}</strong>!</p>
    </div>

    @if(Auth::user()->role == 'admin')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-cyan-600 rounded-md shadow-sm text-white overflow-hidden relative transition hover:shadow-md">
                <div class="p-6 relative z-10">
                    <div class="text-4xl font-bold mb-1">{{ $total_buku }}</div>
                    <div class="text-cyan-100 text-sm font-medium">Total Buku (Katalog)</div>
                </div>
                <i class="fas fa-book absolute -bottom-5 -right-5 text-8xl text-cyan-700 opacity-50"></i>
                <a href="/buku"
                    class="block bg-cyan-700/80 hover:bg-cyan-800 text-center py-2 text-sm text-cyan-50 transition relative z-10">
                    Lihat Detail <i class="fas fa-arrow-circle-right ml-1"></i>
                </a>
            </div>

            <div class="bg-green-500 rounded-md shadow-sm text-white overflow-hidden relative transition hover:shadow-md">
                <div class="p-6 relative z-10">
                    <div class="text-4xl font-bold mb-1">{{ $buku_dipinjam }}</div>
                    <div class="text-green-100 text-sm font-medium">Buku Sedang Dipinjam</div>
                </div>
                <i class="fas fa-tags absolute -bottom-5 -right-5 text-8xl text-green-600 opacity-50"></i>
                <a href="/transaksi"
                    class="block bg-green-600/80 hover:bg-green-700 text-center py-2 text-sm text-green-50 transition relative z-10">
                    Lihat Detail <i class="fas fa-arrow-circle-right ml-1"></i>
                </a>
            </div>

            <div class="bg-amber-500 rounded-md shadow-sm text-white overflow-hidden relative transition hover:shadow-md">
                <div class="p-6 relative z-10">
                    <div class="text-4xl font-bold mb-1">{{ $total_siswa }}</div>
                    <div class="text-amber-100 text-sm font-medium">Total Anggota Siswa</div>
                </div>
                <i class="fas fa-users absolute -bottom-5 -right-5 text-8xl text-amber-600 opacity-50"></i>
                <a href="/anggota"
                    class="block bg-amber-600/80 hover:bg-amber-700 text-center py-2 text-sm text-amber-50 transition relative z-10">
                    Lihat Detail <i class="fas fa-arrow-circle-right ml-1"></i>
                </a>
            </div>

        </div>
    @endif


    @if(Auth::user()->role == 'siswa')
        <div class="bg-white rounded-lg shadow-sm border-t-4 border-teal-500 p-6 md:p-8">
            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                <i class="fas fa-info-circle text-teal-500"></i> Status Peminjaman Anda
            </h3>

            @if($pinjaman_aktif > 0)
                <div class="bg-amber-50 border-l-4 border-amber-500 p-4 mb-4 rounded">
                    <p class="text-gray-700">
                        Anda saat ini sedang meminjam <strong class="text-amber-600 text-xl">{{ $pinjaman_aktif }}</strong> buku.
                        <br>
                        <span class="text-sm text-gray-500">Jangan lupa untuk mengembalikannya tepat waktu untuk menghindari denda,
                            ya!</span>
                    </p>
                </div>
                <a href="/dipinjam"
                    class="inline-block bg-teal-600 text-white px-5 py-2 rounded shadow hover:bg-teal-700 transition font-medium text-sm">Lihat
                    Buku Dipinjam</a>
            @else
                <p class="text-gray-600 mb-4">Anda saat ini belum meminjam buku apa pun. Yuk, eksplorasi katalog buku kami!</p>
                <a href="/peminjaman"
                    class="inline-block bg-teal-600 text-white px-5 py-2 rounded shadow hover:bg-teal-700 transition font-medium text-sm">Cari
                    Buku Sekarang</a>
            @endif
        </div>
    @endif

@endsection