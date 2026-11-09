@extends('layouts.guest')

@section('title', 'Login')

@section('content')

<div class="w-full max-w-md px-4">

    {{-- Header --}}
    <div class="text-center mb-8">
        <span class="text-5xl">🔭</span>
        <h1 class="text-3xl font-bold text-white mt-4">Logbook Langit</h1>
        <p class="text-gray-400 mt-2 text-sm">Masuk untuk mencatat pengamatanmu</p>
    </div>

    {{-- Card Form --}}
    <div class="bg-slate-800 rounded-xl p-8 shadow-2xl border border-slate-700">

        {{-- Pesan error validasi dari controller --}}
        @if(session('error'))
            <div class="bg-red-900/50 border border-red-700 text-red-300 text-sm
                        px-4 py-3 rounded-lg mb-5">
                ⚠️ {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <div class="mb-5">
                <label for="username" class="block text-sm text-gray-400 mb-2">
                    Username
                </label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username kamu"
                    class="w-full bg-slate-700 border border-slate-600 rounded-lg px-4
                           py-3 text-white placeholder-gray-500 focus:outline-none
                           focus:border-indigo-500 transition"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-semibold
                       py-3 rounded-lg transition"
            >
                Masuk ke Logbook
            </button>
        </form>

    </div>

    <p class="text-center text-gray-600 text-xs mt-6">
        🌌 Catat langit, abadikan malam.
    </p>

</div>

@endsection