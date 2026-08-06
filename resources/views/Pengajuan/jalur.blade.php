@extends('layouts.app')

@section('title', 'Jalur Pengajuan - ' . config('app.name'))

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-emerald-800 to-teal-500 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-16 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/15 text-sm font-medium mb-4">
                Cara Mengajukan
            </span>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Jalur Pengajuan</h1>
            <p class="text-white/90 max-w-2xl mx-auto">
                Ada beberapa cara untuk mengajukan surat atau layanan administrasi desa.
                Pilih jalur yang paling sesuai dengan kebutuhan Anda.
            </p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 py-12 space-y-16">

        {{-- Pilihan jalur --}}
        <section>
            <h2 class="text-xl font-bold text-gray-800 mb-6">Pilihan Jalur Pengajuan</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                {{-- Online --}}
                <div class="rounded-2xl border-2 border-primary-500 bg-primary-50/40 shadow-sm p-6 relative">
                    <span
                        class="absolute -top-3 left-6 bg-primary-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                        Direkomendasikan
                    </span>
                    <div class="h-11 w-11 rounded-lg bg-primary-600 text-white flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.348 14.652a3.75 3.75 0 010-5.304m5.304 0a3.75 3.75 0 010 5.304m-7.425 2.121a6.75 6.75 0 010-9.546m9.546 0a6.75 6.75 0 010 9.546M12 12h.008v.008H12V12z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Pengajuan Online</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Isi formulir langsung dari website ini, tanpa perlu datang ke kantor desa. Prosesnya lebih cepat.
                    </p>
                    <a href="{{ route('pengajuan.formulir') }}"
                        class="text-sm font-semibold text-primary-700 hover:underline">
                        Isi formulir online →
                    </a>
                </div>

                {{-- Datang langsung --}}
                <div class="rounded-2xl border border-gray-100 bg-white shadow-sm p-6">
                    <div class="h-11 w-11 rounded-lg bg-primary-50 text-primary-700 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h1m-1 4h1m4-4h1m-1 4h1M6 21V5a1 1 0 011-1h10a1 1 0 011 1v16" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Datang Langsung</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Kunjungi kantor Desa Citali pada jam kerja dengan membawa dokumen persyaratan lengkap.
                    </p>
                    <a href="{{ route('tentang') }}" class="text-sm font-semibold text-primary-700 hover:underline">
                        Lihat alamat & jam layanan →
                    </a>
                </div>

                {{-- Melalui RT/RW --}}
                <div class="rounded-2xl border border-gray-100 bg-white shadow-sm p-6">
                    <div class="h-11 w-11 rounded-lg bg-primary-50 text-primary-700 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-5.13a4 4 0 11-8 0 4 4 0 018 0zm6 3a4 4 0 10-8 0" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Melalui RT/RW</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Ajukan surat pengantar melalui Ketua RT/RW setempat sebelum diteruskan ke kantor desa.
                    </p>
                    <span class="text-sm font-semibold text-gray-400">Hubungi RT/RW setempat</span>
                </div>
            </div>
        </section>

        {{-- Perbandingan --}}
        <section>
            <h2 class="text-xl font-bold text-gray-800 mb-6">Perbandingan Waktu Proses</h2>
            <div class="overflow-x-auto rounded-xl border border-gray-100 shadow-sm">
                <table class="w-full text-sm text-left">
                    <thead class="bg-primary-50 text-primary-800">
                        <tr>
                            <th class="px-5 py-3 font-semibold">Jalur</th>
                            <th class="px-5 py-3 font-semibold">Estimasi Waktu</th>
                            <th class="px-5 py-3 font-semibold">Cocok Untuk</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 bg-white">
                        <tr>
                            <td class="px-5 py-3 font-medium text-gray-800">Online</td>
                            <td class="px-5 py-3 text-gray-600">1-3 hari kerja</td>
                            <td class="px-5 py-3 text-gray-600">Warga yang sibuk atau jauh dari kantor desa</td>
                        </tr>
                        <tr>
                            <td class="px-5 py-3 font-medium text-gray-800">Datang Langsung</td>
                            <td class="px-5 py-3 text-gray-600">Bisa selesai di hari yang sama</td>
                            <td class="px-5 py-3 text-gray-600">Keperluan mendesak</td>
                        </tr>
                        <tr>
                            <td class="px-5 py-3 font-medium text-gray-800">Melalui RT/RW</td>
                            <td class="px-5 py-3 text-gray-600">2-4 hari kerja</td>
                            <td class="px-5 py-3 text-gray-600">Warga yang terbiasa lewat pengurus lingkungan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        {{-- CTA --}}
        <section class="rounded-2xl bg-gradient-to-r from-emerald-800 to-teal-500 text-white p-8 sm:p-10 text-center">
            <h2 class="text-2xl font-bold mb-3">Mulai Pengajuan Sekarang</h2>
            <p class="text-white/90 mb-6 max-w-xl mx-auto">
                Jalur online adalah cara tercepat untuk mengajukan surat tanpa harus antre di kantor desa.
            </p>
            <a href="{{ route('pengajuan.formulir') }}"
                class="inline-block px-6 py-3 rounded-full bg-white text-primary-700 font-semibold hover:bg-primary-50 transition-colors">
                Isi Formulir Pengajuan
            </a>
        </section>

    </div>

@endsection
