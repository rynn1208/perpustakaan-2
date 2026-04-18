<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu | PERPUSTAKAAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 font-sans antialiased text-gray-800">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-gray-300 flex flex-col fixed h-full z-10 shadow-xl">
            <div class="h-16 flex items-center justify-center bg-gray-900 border-b border-gray-700">
                <span class="text-lg font-bold tracking-wider text-white uppercase">
                    KASIR PERPUSTAKAAN
                </span>
            </div>

            <div class="p-4 border-b border-gray-700 flex items-center gap-3">
                <i class="fas fa-user-circle text-2xl text-gray-400"></i>
                <div>
                    <div class="text-sm font-bold text-white">{{ Auth::user()->name }}</div>
                    <div class="text-xs uppercase text-gray-400">({{ Auth::user()->role }})</div>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto py-4">
                <ul class="space-y-1">
                    @if(Auth::user()->role == 'admin')
                        <li>
                            <a href="/dashboard"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('dashboard') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-tachometer-alt w-5"></i> Dashboard
                            </a>
                        </li>
                        <div class="px-6 py-2 mt-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">Menu Utama
                        </div>
                        <li>
                            <a href="/anggota"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('anggota*') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-users w-5"></i> Manajemen User
                            </a>
                        </li>
                        <li>
                            <a href="/buku"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('buku*') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-tags w-5"></i> Data Kategori / Produk
                            </a>
                        </li>
                        <li>
                            <a href="/transaksi"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('transaksi*') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-file-invoice-dollar w-5"></i> Laporan Peminjaman
                            </a>
                        </li>
                    @endif

                    @if(Auth::user()->role == 'siswa')
                        <li>
                            <a href="/dashboard"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('dashboard') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-tachometer-alt w-5"></i> Dashboard
                            </a>
                        </li>
                        <div class="px-6 py-2 mt-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">Aktivitas
                        </div>
                        <li>
                            <a href="/peminjaman"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('peminjaman*') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-shopping-cart w-5"></i> Sewa Buku
                            </a>
                        </li>
                        <li>
                            <a href="/dipinjam"
                                class="flex items-center gap-3 px-6 py-3 {{ request()->is('dipinjam*') ? 'bg-gray-700 text-white border-l-4 border-teal-500' : 'hover:bg-gray-700 hover:text-white' }}">
                                <i class="fas fa-history w-5"></i> Riwayat Sewa
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>

            <div class="p-4 bg-gray-900">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left flex items-center gap-3 px-2 py-2 text-red-400 hover:text-red-300 transition">
                        <i class="fas fa-sign-out-alt"></i> Logout (Keluar)
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 ml-64 flex flex-col">
            <header class="bg-white h-16 shadow-sm flex items-center px-8 z-0">
            </header>

            <main class="flex-1 p-8">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                Swal.fire({ title: 'Berhasil!', text: '{{ session("success") }}', icon: 'success', confirmButtonColor: '#0ea5e9' });
            @endif
            @if(session('error'))
                Swal.fire({ title: 'Ups!', text: '{{ session("error") }}', icon: 'error', confirmButtonColor: '#ef4444' });
            @endif
        });
    </script>
</body>

</html>