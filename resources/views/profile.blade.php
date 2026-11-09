@extends('layouts.app')

@section('title', 'Profil')

@section('content')

    @include('partials.page-header', [
        'title'    => 'Profil Pengamat',
        'subtitle' => 'Informasi akun pengamat yang sedang aktif.',
    ])

    <div class="max-w-lg">
        <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">

            {{-- Header profil --}}
            <div class="bg-indigo-900/40 px-6 py-8 flex items-center gap-4 border-b border-slate-700">
                <div class="bg-indigo-600 rounded-full w-14 h-14 flex items-center justify-center text-2xl font-bold text-white">
                    {{ strtoupper(substr($username, 0, 1)) }}
                </div>
                <div>
                    <p class="text-white font-bold text-lg">{{ $username }}</p>
                    <p class="text-indigo-400 text-sm">Pengamat Aktif</p>
                </div>
            </div>

            {{-- Detail profil --}}
            <div class="px-6 py-5 space-y-4">

                <div class="flex justify-between items-center py-3 border-b border-slate-700/50">
                    <span class="text-gray-400 text-sm">Username</span>
                    <span class="text-white font-medium">{{ $username }}</span>
                </div>

                <div class="flex justify-between items-center py-3 border-b border-slate-700/50">
                    <span class="text-gray-400 text-sm">Lokasi</span>
                    <span class="text-white font-medium">{{ $lokasi }}</span>
                </div>

                <div class="flex justify-between items-center py-3 border-b border-slate-700/50">
                    <span class="text-gray-400 text-sm">Bergabung Sejak</span>
                    <span class="text-white font-medium">{{ $bergabungSejak }}</span>
                </div>

                <div class="flex justify-between items-center py-3">
                    <span class="text-gray-400 text-sm">Total Pengamatan</span>
                    <span class="text-indigo-400 font-bold">{{ $totalPengamatan }} objek</span>
                </div>

            </div>
        </div>
    </div>

@endsection