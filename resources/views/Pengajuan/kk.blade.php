@extends('layouts.app')

@section('title', 'Pengajuan Kartu Keluarga - ' . config('app.name'))

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-emerald-800 to-teal-500 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-16 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/15 text-sm font-medium mb-4">
                Layanan Administrasi Kependudukan
            </span>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Pengajuan Kartu Keluarga (KK)</h1>
            <p class="text-white/90 max-w-2xl mx-auto">
                Ajukan pembuatan, perubahan, atau penerbitan ulang Kartu Keluarga secara online
                melalui kantor Desa Citali.
            </p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 py-12 space-y-16">

        {{-- Jenis pengajuan --}}
        <section>
            <h2 class="text-xl font-bold text-gray-800 mb-6">Jenis Pengajuan KK</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $jenis = [
                        ['KK Baru', 'Untuk keluarga yang baru menikah atau belum memiliki KK.'],
                        ['Penambahan Anggota', 'Menambahkan anggota baru seperti anak yang baru lahir.'],
                        ['Pengurangan Anggota', 'Menghapus anggota karena pindah, cerai, atau meninggal dunia.'],
                        ['Perubahan Data', 'Perbaikan nama, pekerjaan, atau data lain di KK.'],
                        ['KK Hilang/Rusak', 'Penerbitan ulang karena KK hilang atau rusak.'],
                        ['Pemecahan KK', 'Memisahkan KK karena anggota keluarga membentuk rumah tangga baru.'],
                    ];
                @endphp

                @foreach ($jenis as [$judul, $desk])
                    <div class="rounded-xl border border-gray-100 bg-white shadow-sm p-5 hover:shadow-md transition-shadow">
                        <div
                            class="h-10 w-10 rounded-lg bg-primary-50 text-primary-700 flex items-center justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-1">{{ $judul }}</h3>
                        <p class="text-sm text-gray-500">{{ $desk }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Syarat & Alur --}}
        <div class="grid md:grid-cols-2 gap-10">
            {{-- Syarat --}}
            <section>
                <h2 class="text-xl font-bold text-gray-800 mb-6">Syarat Pengajuan</h2>
                <ul class="space-y-3">
                    @foreach (['KK asli (untuk perubahan/penambahan/pengurangan anggota)', 'Fotokopi KTP seluruh anggota keluarga', 'Surat nikah (untuk KK baru)', 'Akta kelahiran (untuk penambahan anggota anak)', 'Surat keterangan pindah (jika ada perubahan domisili)', 'Surat kematian (untuk pengurangan anggota karena meninggal)'] as $syarat)
                        <li class="flex items-start gap-3">
                            <span
                                class="mt-0.5 flex-shrink-0 h-5 w-5 rounded-full bg-primary-500 text-white flex items-center justify-center text-xs">
                                ✓
                            </span>
                            <span class="text-gray-600">{{ $syarat }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>

            {{-- Alur --}}
            <section>
                <h2 class="text-xl font-bold text-gray-800 mb-6">Alur Pengajuan</h2>
                <ol class="space-y-4">
                    @foreach (['Siapkan dokumen persyaratan sesuai jenis pengajuan', 'Isi formulir pengajuan KK secara online', 'Verifikasi berkas oleh petugas desa', 'KK diproses & diteruskan ke Disdukcapil untuk penerbitan'] as $i => $langkah)
                        <li class="flex items-start gap-4">
                            <span
                                class="flex-shrink-0 h-8 w-8 rounded-full bg-primary-700 text-white flex items-center justify-center font-semibold text-sm">
                                {{ $i + 1 }}
                            </span>
                            <span class="text-gray-600 pt-1">{{ $langkah }}</span>
                        </li>
                    @endforeach
                </ol>
            </section>
        </div>

        {{-- Info tambahan --}}
        <section class="rounded-xl bg-amber-50 border border-amber-100 p-6 flex items-start gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            <div>
                <h3 class="font-semibold text-amber-800 mb-1">Perlu diketahui</h3>
                <p class="text-sm text-amber-700">
                    Penerbitan KK memerlukan proses lanjutan di Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil).
                    Waktu penyelesaian dapat bervariasi tergantung antrean di Disdukcapil setempat.
                </p>
            </div>
        </section>

        {{-- CTA Form --}}
        <section class="rounded-2xl bg-gradient-to-r from-emerald-800 to-teal-500 text-white p-8 sm:p-10 text-center">
            <h2 class="text-2xl font-bold mb-3">Siap Mengajukan?</h2>
            <p class="text-white/90 mb-6 max-w-xl mx-auto">
                Klik tombol di bawah untuk mengisi formulir pengajuan Kartu Keluarga secara online.
            </p>
            <a href="{{ route('pengajuan.formulir') }}"
                class="inline-block px-6 py-3 rounded-full bg-white text-primary-700 font-semibold hover:bg-primary-50 transition-colors">
                Isi Formulir Pengajuan
            </a>
        </section>

    </div>

@endsection
