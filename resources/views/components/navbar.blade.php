<nav class="bg-slate-800 border-b border-slate-700 shadow-lg">
    <div class="container mx-auto px-6 py-3 flex items-center justify-between">

        {{-- Brand --}}
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-2 text-lg font-bold text-indigo-400 hover:text-indigo-300 transition">
            🔭 Logbook Langit
        </a>

        {{-- Menu navigasi --}}
        <div class="flex items-center gap-6">
            <a href="{{ route('dashboard') }}"
               class="text-gray-300 hover:text-white text-sm transition">
                Dashboard
            </a>
            <a href="{{ route('pengelolaan') }}"
               class="text-gray-300 hover:text-white text-sm transition">
                Pengelolaan
            </a>
            <a href="{{ route('profile') }}"
               class="text-gray-300 hover:text-white text-sm transition">
                Profil
            </a>

            {{-- Username dari session ditampilkan di navbar --}}
            <span class="text-indigo-300 text-sm font-medium border border-indigo-700 px-3 py-1 rounded-lg">
                👤 {{ session('username', 'Pengamat') }}
            </span>

            <a href="{{ route('logout') }}"
               class="bg-red-800 hover:bg-red-700 text-white text-sm px-4 py-1.5 rounded-lg transition">
                Keluar
            </a>
        </div>

    </div>
</nav>