<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PERPUSTAKAAN</title>
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

    <div class="bg-white w-full max-w-[400px] rounded shadow-md border-t-4 border-green-600 overflow-hidden">
        <div class="p-8">
            <p class="text-center text-sm text-gray-500 mb-6">Silakan login untuk memulai sesi Anda</p>

            @if ($errors->any())
                <div class="bg-red-50 text-red-500 p-3 rounded text-sm mb-4 border border-red-200">
                    <i class="fas fa-exclamation-circle mr-1"></i> Username atau password salah.
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div class="relative">
                    <input type="text" name="username" placeholder="Username" required
                        class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-sm text-gray-700 placeholder-gray-400">
                    <span class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>

                <div class="relative">
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-sm text-gray-700 placeholder-gray-400">
                    <span class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-2">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                        <span class="text-sm font-bold text-gray-700">Ingat Saya</span>
                    </label>
                    <button type="submit"
                        class="bg-[#28a745] hover:bg-green-700 text-white font-medium px-6 py-2 rounded text-sm transition">
                        Log In
                    </button>
                </div>
            </form>

            <div class="mt-6 space-y-2">
                <a href="{{ route('register') }}" class="block text-sm text-blue-500 hover:underline">Daftar akun baru
                    (Register)</a>
            </div>
        </div>
    </div>

</body>

</html>