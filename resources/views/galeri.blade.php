@extends('layouts.app')

@section('title', 'Galeri - ' . config('app.name'))

@section('content')
<section class="max-w-6xl mx-auto px-4 sm:px-6 py-16">
    <h1 class="text-3xl font-bold text-primary-700 mb-10 text-center">Galeri Desa</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @for ($i = 1; $i <= 8; $i++)
            <div class="aspect-square bg-primary-100 rounded-xl flex items-center justify-center text-primary-500 text-3xl">
                🖼️
            </div>
        @endfor
    </div>
    <p class="text-center text-sm text-gray-400 mt-8">Ganti placeholder di atas dengan foto kegiatan desa Anda.</p>
</section>
@endsection
