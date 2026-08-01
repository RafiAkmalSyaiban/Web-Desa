@extends('layouts.app')

@section('title', 'Tentang Desa - ' . config('app.name'))
@section('meta_description', 'Mengenal profil, sejarah, visi misi, dan potensi ' . config('app.name'))

@section('content')

{{-- HERO --}}
<section class="bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold mb-4 text-primary-700">Tentang {{ $profil['nama_desa'] }}</h1>
        <p class="max-w-2xl mx-auto text-gray-500">
            Mengenal lebih dekat sejarah, visi misi, dan potensi desa yang kaya akan budaya dan tradisi
        </p>
    </div>
</section>

{{-- PROFIL DESA --}}
<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-2xl font-bold mb-4 text-primary-700">Profil Desa</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                {{ $profil['nama_desa'] }} merupakan salah satu desa di {{ $profil['kecamatan'] }},
                {{ $profil['kabupaten'] }}, {{ $profil['provinsi'] }}. {{ $profil['deskripsi'] }}
            </p>
            <p class="text-gray-600 leading-relaxed">
                Desa ini memiliki luas wilayah {{ $profil['luas_wilayah'] }} dengan jumlah penduduk
                {{ number_format($profil['penduduk_laki'] + $profil['penduduk_perempuan']) }} jiwa,
                terdiri dari {{ number_format($profil['penduduk_laki']) }} laki-laki dan
                {{ number_format($profil['penduduk_perempuan']) }} perempuan, serta
                {{ number_format($profil['jumlah_kk']) }} Kepala Keluarga.
            </p>
        </div>
        <div class="bg-white rounded-2xl p-10 text-center shadow-sm">
            <div class="mx-auto h-24 w-24 rounded-full bg-primary-600 text-white flex items-center justify-center text-2xl font-bold mb-4">DC</div>
            <h3 class="text-xl font-bold text-primary-700">{{ $profil['nama_desa'] }}</h3>
            <p class="text-gray-500">Guyub Rukun Membangun Desa</p>
        </div>
    </div>
</section>
{{-- DATA WILAYAH --}}
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-primary-700">Data Wilayah</h2>
            <p class="text-gray-500">Informasi terkini mengenai demografi dan administrasi {{ $profil['nama_desa'] }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center mb-14">
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700">{{ $profil['luas_wilayah'] }}</div>
                <div class="text-sm text-gray-500 mt-1">Luas Wilayah</div>
            </div>
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700">{{ number_format($profil['penduduk_laki'] + $profil['penduduk_perempuan']) }}</div>
                <div class="text-sm text-gray-500 mt-1">Jumlah Penduduk</div>
            </div>
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700">{{ number_format($profil['jumlah_kk']) }}</div>
                <div class="text-sm text-gray-500 mt-1">Kepala Keluarga</div>
            </div>
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700">{{ $profil['tahun_berdiri'] }}</div>
                <div class="text-sm text-gray-500 mt-1">Tahun Berdiri</div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <h3 class="sm:col-span-2 lg:col-span-4 font-semibold text-lg mb-1">Batas Wilayah</h3>
            @foreach ($batasWilayah as $arah => $keterangan)
            <div class="border border-gray-100 rounded-xl p-5 shadow-sm">
                <div class="text-sm uppercase tracking-wide text-primary-600 font-semibold mb-1">{{ ucfirst($arah) }}</div>
                <div class="text-gray-600 text-sm">{{ $keterangan }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- VISI MISI --}}
<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-10">
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm flex flex-col justify-center">
            <h2 class="text-xl font-bold mb-3 text-primary-700">Visi</h2>
            <p class="text-lg italic text-gray-600">&ldquo;{{ $visi }}&rdquo;</p>
        </div>
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-4 text-primary-700">Misi</h2>
            <ul class="space-y-3">
                @foreach ($misi as $item)
                <li class="flex gap-3 text-gray-600">
                    <span class="mt-1 h-2 w-2 rounded-full bg-primary-600 shrink-0"></span>
                    {{ $item }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
{{-- POTENSI DESA --}}
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-primary-700">Potensi {{ $profil['nama_desa'] }}</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">
                Desa ini memiliki potensi besar baik dari sisi sumber daya alam, sumber daya manusia,
                kelembagaan, maupun sosial budaya.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
            @foreach ($potensi as $p)
            <div class="border border-gray-100 rounded-xl p-6 shadow-sm">
                <h3 class="font-semibold text-primary-700 mb-2">{{ $p['judul'] }}</h3>
                <p class="text-sm text-gray-500 mb-3">{{ $p['ringkasan'] }}</p>
                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                    @foreach ($p['poin'] as $poin)
                    <li>{{ $poin }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <div>
            <h3 class="font-semibold text-lg mb-4">Persentase Penggunaan Lahan</h3>
            <div class="space-y-3">
                @foreach ($penggunaanLahan as $lahan)
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">{{ $lahan['label'] }}</span>
                        <span class="font-medium text-primary-700">{{ number_format($lahan['persen'], 2) }}%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-primary-600 h-2 rounded-full" style="width: {{ min($lahan['persen'] * 2, 100) }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- SEJARAH --}}
<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <h2 class="text-2xl font-bold mb-6 text-primary-700">Sejarah Singkat</h2>
        <p class="text-gray-600 leading-relaxed mb-4">{{ $sejarah['ringkasan'] }}</p>
        <p class="text-gray-600 leading-relaxed mb-8">{{ $sejarah['detail'] }}</p>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold mb-3">Tokoh Perintis Pemekaran Desa</h3>
                <ul class="space-y-2 text-gray-600 text-sm list-disc list-inside">
                    @foreach ($pemimpinUptd as $nama)
                    <li>{{ $nama }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold mb-3">Kepemimpinan Desa</h3>
                <ul class="divide-y divide-gray-100 text-sm">
                    @foreach ($kepalaDesa as $k)
                    <li class="py-2 flex justify-between gap-4">
                        <div>
                            <div class="font-medium text-gray-700">{{ $k['nama'] }}</div>
                            <div class="text-gray-400">{{ $k['jabatan'] }}</div>
                        </div>
                        <div class="text-primary-600 font-medium whitespace-nowrap">{{ $k['periode'] }}</div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- HUBUNGI KAMI --}}
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-primary-700">Hubungi Kami</h2>
            <p class="text-gray-500">Sampaikan aspirasi, pengaduan, atau pertanyaan Anda kepada kami</p>
        </div>

        @if (session('status'))
        <div class="max-w-2xl mx-auto mb-6 bg-primary-50 text-primary-700 border border-primary-100 rounded-lg px-4 py-3 text-sm">
            {{ session('status') }}
        </div>
        @endif

        <div class="grid md:grid-cols-2 gap-10">
            <form method="POST" action="{{ route('pengaduan.store') }}" class="bg-gray-50 rounded-2xl p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required>
                    @error('nama') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required>
                        @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Nomor Telepon</label>
                        <input type="text" name="telepon" value="{{ old('telepon') }}" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Kategori</label>
                    <select name="kategori" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required>
                        <option value="">Pilih kategori</option>
                        <option value="Pengaduan">Pengaduan</option>
                        <option value="Aspirasi">Aspirasi</option>
                        <option value="Permintaan Informasi">Permintaan Informasi</option>
                        <option value="Saran dan Masukan">Saran dan Masukan</option>
                    </select>
                    @error('kategori') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Pesan</label>
                    <textarea name="pesan" rows="4" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required>{{ old('pesan') }}</textarea>
                    @error('pesan') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 rounded-lg transition">
                    Kirim Pengaduan
                </button>
            </form>

            <div>
                <div class="rounded-2xl overflow-hidden shadow-sm mb-6 aspect-video">
                    <iframe src="{{ $kontak['maps_embed'] }}" class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="grid sm:grid-cols-2 gap-4 text-sm">
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Alamat</div>
                        <div class="text-gray-500">{{ $kontak['alamat'] }}</div>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Telepon</div>
                        <div class="text-gray-500">{{ $kontak['telepon'] }}<br>WhatsApp: {{ $kontak['whatsapp'] }}</div>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Email</div>
                        <div class="text-gray-500">{{ $kontak['email'] }}</div>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Jam Pelayanan</div>
                        <div class="text-gray-500">Senin - Jumat: {{ $kontak['jam_layanan_weekday'] }}<br>Sabtu - Minggu: {{ $kontak['jam_layanan_weekend'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection