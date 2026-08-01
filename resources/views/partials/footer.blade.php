<footer class="bg-gradient-to-br from-emerald-800 to-teal-500 text-gray-100 mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 grid gap-8 md:grid-cols-3">
        <div>
            <div class="flex items-center gap-2 font-bold text-white text-lg mb-3">
                <span class="inline-flex h-9 w-9 rounded-full bg-white text-primary-700 items-center justify-center text-sm">DC</span>
                {{ config('app.name') }}
            </div>
            <p class="text-sm text-gray-200 leading-relaxed">
                Dengan semangat kebersamaan, desa terus membangun menuju masyarakat yang mandiri, sejahtera, dan berdaya saing.
            </p>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-3">Menu Utama</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ route('berita.index') }}" class="hover:text-white">Berita</a></li>
                <li><a href="{{ route('struktur') }}" class="hover:text-white">Struktur Organisasi</a></li>
                <li><a href="{{ route('galeri') }}" class="hover:text-white">Galeri</a></li>
                <li><a href="{{ route('tentang') }}" class="hover:text-white">Tentang Desa</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-3">Kontak</h4>
            <p class="text-sm text-gray-200 leading-relaxed">
                Dusun Citali, Desa Citali<br>
                Kecamatan Pamulihan<br>
                Kabupaten Sumedang, Kode Pos 45362
            </p>
        </div>
    </div>

    <div class="border-t border-white/20 py-4 text-center text-xs text-gray-200">
        &copy; {{ date('Y') }} {{ config('app.name') }}. Dibangun dengan Laravel.
    </div>
</footer>