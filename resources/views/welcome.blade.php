<!DOCTYPE html>
<html lang="id" class="transition duration-500">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Halaman Ujian - STIKES Notokusumo</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo_stikes.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: 'class',
        };
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes fade-in {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }

        .animate-spin-slow {
            animation: spin 6s linear infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-200 dark:from-indigo-900 dark:to-zinc-900 min-h-screen flex items-center justify-center p-4 transition duration-500">

    <!-- Tombol Toggle Mode -->
    <button onclick="toggleDarkMode()" class="absolute top-4 left-4 bg-white dark:bg-gray-700 dark:text-white text-gray-800 px-3 py-2 rounded-lg shadow hover:shadow-md transition">
        🌗 Mode
    </button>

    <div class="max-w-5xl w-full bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden animate-fade-in transition duration-500">
        <!-- Gambar Header -->
        <div class="relative w-full h-72 overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center filter blur-[2px] scale-110 z-0"
                 style="background-image: url('{{ asset('images/stikes_noto.png') }}');">
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>

            <!-- Logo -->
            <div class="absolute top-4 right-4 z-20">
                <img src="{{ asset('images/logo_stikes.png') }}"
                     alt="Logo STIKES"
                     class="w-14 h-14 rounded-full border-2 border-white shadow-xl hover:animate-spin-slow transition duration-300">
            </div>
        </div>

        <!-- Konten -->
        <div class="p-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-2 animate-fade-in">Selamat Datang di Halaman Ujian</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 dark:text-gray-300 mb-4 animate-fade-in">STIKES Notokusumo Yogyakarta</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 animate-fade-in">Silakan pilih jenis ujian yang akan Anda kerjakan</p>

            <div class="flex flex-col md:flex-row justify-center gap-6 items-stretch">
                <a href="https://forms.gle/dBSMj4zo8sdrk8fr8" target="_blank"
                   class="w-64 text-center bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 rounded-xl text-lg transition-all duration-300 shadow-md hover:scale-105">
                   Tes Kemampuan Dasar
                </a>
                <a href="https://forms.gle/TvfnuWmuQwVFP2qq8" target="_blank"
                   class="w-64 text-center bg-purple-600 hover:bg-purple-700 text-white px-6 py-4 rounded-xl text-lg transition-all duration-300 shadow-md hover:scale-105">
                   Tes Psikotes
                </a>
            </div>
        </div>
    </div>

    <!-- Script Dark Mode -->
    <script>
        function toggleDarkMode() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        }

        window.onload = () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            }
        };
    </script>
</body>
</html>
