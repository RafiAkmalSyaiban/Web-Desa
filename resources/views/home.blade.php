@extends('layouts.app')

@section('title', config('app.name') . ' - Website Resmi')

@section('content')
<section class="relative bg-cover bg-center text-white" style="background-image: url('{{ asset('images/desa.jpeg') }}');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 py-24 text-center">
        <h1 class="text-3xl sm:text-5xl font-bold mb-4">Selamat Datang di {{ config('app.name') }}</h1>
        <p class="max-w-2xl mx-auto text-primary-50 mb-8">
            Website resmi yang memberikan informasi terkini tentang pemerintahan, berita, dan kegiatan desa.
        </p>
        <a href="{{ route('tentang') }}" class="inline-block bg-white text-primary-700 font-semibold px-6 py-3 rounded-full hover:bg-primary-50 transition">
            Kenali Desa Kami &rarr;
        </a>
    </div>
</section>

<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 grid sm:grid-cols-3 gap-6 text-center">
        <a href="{{ route('tentang') }}" class="border border-gray-100 rounded-2xl p-8 bg-white shadow-sm hover:shadow-md transition">
            <div class="text-3xl mb-3">🏘️</div>
            <h3 class="font-semibold mb-1">Tentang Desa</h3>
            <p class="text-sm text-gray-500">Profil, sejarah, visi misi, dan potensi desa</p>
        </a>
        <a href="{{ route('berita.index') }}" class="border border-gray-100 rounded-2xl p-8 bg-white shadow-sm hover:shadow-md transition">
            <div class="text-3xl mb-3">📰</div>
            <h3 class="font-semibold mb-1">Berita Desa</h3>
            <p class="text-sm text-gray-500">Informasi dan kegiatan terbaru</p>
        </a>
        <a href="{{ route('struktur') }}" class="border border-gray-100 rounded-2xl p-8 bg-white shadow-sm hover:shadow-md transition">
            <div class="text-3xl mb-3">🧑‍💼</div>
            <h3 class="font-semibold mb-1">Struktur Organisasi</h3>
            <p class="text-sm text-gray-500">Perangkat dan susunan pemerintah desa</p>
        </a>
    </div>
</section>
@endsection