@extends('layouts.app')

@section('title', 'Berita - ' . config('app.name'))

@section('content')
<section class="max-w-6xl mx-auto px-4 sm:px-6 py-16">
    <h1 class="text-3xl font-bold text-primary-700 mb-10 text-center">Berita Desa</h1>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($berita as $item)
            <a href="{{ route('berita.show', $item['slug']) }}" class="block border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="h-40 bg-primary-100 flex items-center justify-center text-primary-600 text-4xl">📰</div>
                <div class="p-5">
                    <div class="text-xs text-gray-400 mb-2">{{ $item['tanggal'] }}</div>
                    <h2 class="font-semibold mb-2">{{ $item['judul'] }}</h2>
                    <p class="text-sm text-gray-500">{{ $item['ringkasan'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endsection
