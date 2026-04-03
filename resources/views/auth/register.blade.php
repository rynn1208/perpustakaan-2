<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | PERPUSTAKAAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#eaedf1] min-h-screen flex flex-col items-center justify-center p-4">

    <div class="mb-6 text-center">
        <h1 class="text-3xl text-gray-700">
            Sistem Kasir <span class="font-light text-gray-500">Perpustakaan</span>
        </h1>
    </div>

    <div class="bg-white w-full max-w-[400px] rounded shadow-md border-t-4 border-blue-600 overflow-hidden">
        <div class="p-8">
            <p class="text-center text-sm text-gray-500 mb-6">Lengkapi data untuk mendaftar akun baru</p>

            @if ($errors->any())
                <div class="bg-red-50 text-red-500 p-3 rounded text-xs mb-4 border border-red-200">
                    <ul class="list-disc pl-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div class="relative">
                    <input type="text" name="name" placeholder="Nama Lengkap" required value="{{ old('name') }}"
                        class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm text-gray-700 placeholder-gray-400">
                    <span class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fas fa-user"></i>
                    </span>
                </div>

                <div class="relative">
                    <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}"
                        class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm text-gray-700 placeholder-gray-400">
                    <span class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>

                <div class="relative">
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm text-gray-700 placeholder-gray-400">
                    <span class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>

                <div class="relative">
                    <input type="password" name="password_confirmation" placeholder="Ulangi Password" required
                        class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm text-gray-700 placeholder-gray-400">
                    <span class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded text-sm transition flex justify-center items-center gap-2">
                        <i class="fas fa-user-plus"></i> Daftar Sekarang
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center border-t border-gray-100 pt-4">
                <a href="{{ route('login') }}" class="text-sm text-blue-500 hover:underline">Sudah punya akun? Login di
                    sini</a>
            </div>
        </div>
    </div>

</body>

</html>