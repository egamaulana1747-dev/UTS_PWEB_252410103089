{{--
    Partial: page-header
    Dipakai dengan @include('partials.page-header', ['title' => '...', 'subtitle' => '...'])
    Variabel 'subtitle' bersifat opsional.
--}}
<div class="mb-8 pb-5 border-b border-slate-700">
    <h1 class="text-2xl font-bold text-white tracking-tight">{{ $title }}</h1>
    @if(isset($subtitle))
        <p class="text-gray-400 text-sm mt-1">{{ $subtitle }}</p>
    @endif
</div>