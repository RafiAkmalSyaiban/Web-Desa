@extends('layouts.app')

@section('title', 'Struktur Organisasi - ' . config('app.name'))

@section('content')
<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <h1 class="text-3xl font-bold text-primary-700 mb-14 text-center">Struktur Organisasi</h1>

        @php
        $card = function ($item, $globalIndex) {
        return '
        <button type="button" onclick="document.getElementById(\'modal-'.$globalIndex.'\').classList.remove(\'hidden\')" class="text-left w-48 border border-gray-100 rounded-2xl p-4 text-center shadow-sm bg-white hover:shadow-md transition cursor-pointer">
            <div class="mx-auto h-14 w-14 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-lg font-bold mb-2">
                '.substr($item['nama'], 0, 1).'
            </div>
            <h3 class="font-semibold text-sm">'.$item['nama'].'</h3>
            <p class="text-xs text-gray-500">'.$item['jabatan'].'</p>
        </button>';
        };
        $cardFull = function ($item, $globalIndex) {
        return '
        <button type="button" onclick="document.getElementById(\'modal-'.$globalIndex.'\').classList.remove(\'hidden\')" class="text-left w-full border border-gray-100 rounded-2xl p-3 text-center shadow-sm bg-white hover:shadow-md transition cursor-pointer">
            <div class="mx-auto h-12 w-12 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-base font-bold mb-2">
                '.substr($item['nama'], 0, 1).'
            </div>
            <h3 class="font-semibold text-xs sm:text-sm leading-tight">'.$item['nama'].'</h3>
            <p class="text-[11px] sm:text-xs text-gray-500">'.$item['jabatan'].'</p>
        </button>';
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
                        <div class="hidden md:block absolute -top-8 left-1/2 -translate-x-1/2 w-px h-8 bg-gray-300"></div>
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
                        <div class="hidden md:block absolute -top-8 left-1/2 -translate-x-1/2 w-px h-8 bg-gray-300"></div>
                        {!! $cardFull($item, $index) !!}
                    </div>
                    @php $index++; @endphp
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- MODAL BIODATA --}}
@foreach ($struktur as $i => $item)
<div id="modal-{{ $i }}" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/50" onclick="document.getElementById('modal-{{ $i }}').classList.add('hidden')"></div>
    <div class="relative bg-white rounded-2xl shadow-lg max-w-md w-full p-6">
        <button type="button" onclick="document.getElementById('modal-{{ $i }}').classList.add('hidden')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="text-center mb-6">
            <div class="mx-auto h-20 w-20 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-2xl font-bold mb-3">
                {{ substr($item['nama'], 0, 1) }}
            </div>
            <h3 class="text-lg font-bold text-primary-700">{{ $item['nama'] }}</h3>
            <p class="text-sm text-gray-500">{{ $item['jabatan'] }}</p>
        </div>

        <dl class="space-y-3 text-sm">
            <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                <dt class="text-gray-500">Tempat, Tanggal Lahir</dt>
                <dd class="text-gray-700 font-medium text-right">{{ $item['ttl'] }}</dd>
            </div>
            <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                <dt class="text-gray-500">Pendidikan Terakhir</dt>
                <dd class="text-gray-700 font-medium text-right">{{ $item['pendidikan'] }}</dd>
            </div>
            <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                <dt class="text-gray-500">Alamat</dt>
                <dd class="text-gray-700 font-medium text-right">{{ $item['alamat'] }}</dd>
            </div>
            <div class="flex justify-between gap-4">
                <dt class="text-gray-500">No. HP</dt>
                <dd class="text-gray-700 font-medium text-right">{{ $item['no_hp'] }}</dd>
            </div>
        </dl>
    </div>
</div>
@endforeach
@endsection