@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')

    @include('partials.page-header', [
        'title'    => 'Pengelolaan Pengamatan',
        'subtitle' => 'Daftar seluruh objek langit yang telah tercatat dalam logbook.',
    ])

    <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">

        {{-- Header tabel --}}
        <div class="px-6 py-4 border-b border-slate-700 flex items-center justify-between">
            <h2 class="text-sm font-semibold text-gray-300">
                Daftar Objek Langit
            </h2>
            <span class="text-xs text-gray-500">
                {{ count($pengamatan) }} objek tercatat
            </span>
        </div>

        {{-- Tabel --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead>
                    <tr class="border-b border-slate-700 text-gray-400 text-xs uppercase tracking-wider">
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Objek</th>
                        <th class="px-6 py-3">Jenis</th>
                        <th class="px-6 py-3">Magnitudo</th>
                        <th class="px-6 py-3">Tanggal</th>
                        <th class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengamatan as $index => $item)
                    <tr class="border-b border-slate-700/50 hover:bg-slate-700/30 transition">

                        <td class="px-6 py-4 text-gray-500">
                            {{ $index + 1 }}
                        </td>

                        <td class="px-6 py-4 font-semibold text-white">
                            {{ $item['objek'] }}
                        </td>

                        <td class="px-6 py-4 text-gray-300">
                            {{ $item['jenis'] }}
                        </td>

                        <td class="px-6 py-4 font-mono text-indigo-400">
                            {{ $item['magnitudo'] }}
                        </td>

                        <td class="px-6 py-4 text-gray-400">
                            {{ $item['tanggal'] }}
                        </td>

                        <td class="px-6 py-4">
                            @if ($item['status'] === 'Jelas' || $item['status'] === 'Cerah')
                                <span class="bg-green-900/50 text-green-400 text-xs px-3 py-1 rounded-full">
                                    {{ $item['status'] }}
                                </span>
                            @elseif ($item['status'] === 'Berawan')
                                <span class="bg-yellow-900/50 text-yellow-400 text-xs px-3 py-1 rounded-full">
                                    {{ $item['status'] }}
                                </span>
                            @else
                                <span class="bg-blue-900/50 text-blue-400 text-xs px-3 py-1 rounded-full">
                                    {{ $item['status'] }}
                                </span>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection