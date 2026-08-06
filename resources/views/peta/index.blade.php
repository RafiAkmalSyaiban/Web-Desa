@extends('layouts.app')

@section('title', 'Peta Desa - ' . config('app.name'))

@section('content')
    <section class="max-w-6xl mx-auto px-4 sm:px-6 py-16">
        <h1 class="text-3xl font-bold mb-2 text-center">Peta {{ $lokasi['nama'] }}</h1>
        <p class="text-center text-gray-500 mb-6">{{ $lokasi['alamat'] }}</p>

        <div class="rounded-2xl overflow-hidden shadow-md">
            <iframe src="{{ $mapEmbedUrl }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
@endsection
