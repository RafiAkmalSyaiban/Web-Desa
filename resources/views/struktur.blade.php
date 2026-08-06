@extends('layouts.app')

@section('title', 'Struktur Organisasi - ' . config('app.name'))

@section('content')
    <section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <h1 class="text-3xl font-bold text-primary-700 mb-14 text-center">Struktur Organisasi</h1>

            @php
                // NOTE: sesuaikan route('struktur.profil', $globalIndex) dengan route
                // yang mengarah ke view profil.blade.php (lihat file terpisah).
                // Controllernya tinggal ambil $struktur[$globalIndex] lalu return view('profil', ['item' => $item]).
                $card = function ($item, $globalIndex) {
                    return '
        <a href="' .
                        route('struktur.profil', $globalIndex) .
                        '" class="group block text-left w-48 border border-gray-100 rounded-2xl p-4 text-center shadow-sm bg-white hover:shadow-lg hover:-translate-y-0.5 hover:border-primary-200 transition-all duration-200">
            <div class="mx-auto h-14 w-14 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-lg font-bold mb-2 ring-4 ring-primary-50 group-hover:ring-primary-100 transition">
                ' .
                        substr($item['nama'], 0, 1) .
                        '
            </div>
            <h3 class="font-semibold text-sm text-gray-800">' .
                        $item['nama'] .
                        '</h3>
            <p class="text-xs text-primary-600 font-medium mt-0.5">' .
                        $item['jabatan'] .
                        '</p>
        </a>';
                };
                $cardFull = function ($item, $globalIndex) {
                    return '
        <a href="' .
                        route('struktur.profil', $globalIndex) .
                        '" class="group block text-left w-full border border-gray-100 rounded-2xl p-3 text-center shadow-sm bg-white hover:shadow-lg hover:-translate-y-0.5 hover:border-primary-200 transition-all duration-200">
            <div class="mx-auto h-12 w-12 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-base font-bold mb-2 ring-4 ring-primary-50 group-hover:ring-primary-100 transition">
                ' .
                        substr($item['nama'], 0, 1) .
                        '
            </div>
            <h3 class="font-semibold text-xs sm:text-sm leading-tight text-gray-800">' .
                        $item['nama'] .
                        '</h3>
            <p class="text-[11px] sm:text-xs text-primary-600 font-medium mt-0.5">' .
                        $item['jabatan'] .
                        '</p>
        </a>';
                };
                $index = 0;
            @endphp

            <div class="flex flex-col items-center">

                {{-- LEVEL 1: KEPALA DESA --}}
                @foreach ($byLevel[1] as $item)
                    {!! $card($item, $index) !!}
                    @php $index++; @endphp
                @endforeach

                <div class="w-px h-8 bg-gray-300"></div>

                {{-- LEVEL 2: SEKRETARIS DESA --}}
                @foreach ($byLevel[2] as $item)
                    {!! $card($item, $index) !!}
                    @php $index++; @endphp
                @endforeach

                <div class="w-px h-8 bg-gray-300"></div>

                {{-- LEVEL 3: KAUR / KASI --}}
                <div class="w-full">
                    <div class="hidden md:block border-t border-gray-300 w-5/6 mx-auto"></div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 lg:gap-4 pt-8">
                        @foreach ($byLevel[3] as $item)
                            <div class="relative flex flex-col items-center">
                                <div class="hidden md:block absolute -top-8 left-1/2 -translate-x-1/2 w-px h-8 bg-gray-300">
                                </div>
                                {!! $cardFull($item, $index) !!}
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>

                <div class="w-px h-8 bg-gray-300"></div>

                {{-- LEVEL 4: KEPALA DUSUN --}}
                <div class="w-full max-w-xl mx-auto">
                    <div class="hidden md:block border-t border-gray-300 w-2/3 mx-auto"></div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 lg:gap-4 pt-8">
                        @foreach ($byLevel[4] as $item)
                            <div class="relative flex flex-col items-center">
                                <div class="hidden md:block absolute -top-8 left-1/2 -translate-x-1/2 w-px h-8 bg-gray-300">
                                </div>
                                {!! $cardFull($item, $index) !!}
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
