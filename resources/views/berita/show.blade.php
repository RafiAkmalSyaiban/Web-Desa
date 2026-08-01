@extends('layouts.app')

@section('title', 'Detail Berita - ' . config('app.name'))

@section('content')
<section class="max-w-3xl mx-auto px-4 sm:px-6 py-16">
    <a href="{{ route('berita.index') }}" class="text-sm text-primary-600 hover:underline">&larr; Kembali ke Berita</a>
    <h1 class="text-2xl sm:text-3xl font-bold text-primary-700 mt-4 mb-6 capitalize">{{ str_replace('-', ' ', $slug) }}</h1>
    <p class="text-gray-600 leading-relaxed">
        Konten berita lengkap dapat ditambahkan di sini, misalnya diambil dari database.
        Halaman ini adalah contoh detail berita berdasarkan slug: <strong>{{ $slug }}</strong>.
    </p>
</section>
@endsection
