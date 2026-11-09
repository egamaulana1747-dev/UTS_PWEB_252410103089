@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('partials.page-header', [
        'title'    => 'Selamat datang, ' . $username . '! 👋',
        'subtitle' => 'Pantau catatan pengamatanmu dari sini.',
    ])

    {{-- Kartu statistik ringkas --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Kartu 1: Total Objek --}}
        <div class="bg-slate-800 rounded-xl p-6 border border-slate-700">
            <p class="text-gray-400 text-sm mb-1">Total Objek Teramati</p>
            <p class="text-3xl font-bold text-indigo-400">{{ $totalObjek }}</p>
            <p class="text-gray-500 text-xs mt-2">objek tercatat dalam logbook</p>
        </div>

        {{-- Kartu 2: Objek Terbaru --}}
        <div class="bg-slate-800 rounded-xl p-6 border border-slate-700">
            <p class="text-gray-400 text-sm mb-1">Pengamatan Terakhir</p>
            <p class="text-xl font-bold text-white">{{ $objekTerbaru }}</p>
            <p class="text-gray-500 text-xs mt-2">{{ $tanggalTerakhir }}</p>
        </div>

        {{-- Kartu 3: Pengamat Aktif --}}
        <div class="bg-slate-800 rounded-xl p-6 border border-slate-700">
            <p class="text-gray-400 text-sm mb-1">Pengamat Aktif</p>
            <p class="text-xl font-bold text-white">{{ $username }}</p>
            <p class="text-gray-500 text-xs mt-2">sesi ini</p>
        </div>

    </div>

@endsection