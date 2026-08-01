# Website Desa Citali (Laravel)

Contoh website profil desa dibangun dengan **Laravel 11**, terinspirasi dari struktur halaman
`https://citali.desa.id/tentang` (data pada halaman "Tentang Desa" adalah contoh, silakan
ganti dengan data desa Anda sendiri di `app/Http/Controllers/TentangController.php`).

## Fitur

- Halaman Home
- Halaman **Tentang Desa** (profil, data wilayah, visi misi, potensi desa, sejarah, form pengaduan)
- Halaman Berita (index + detail)
- Halaman Struktur Organisasi
- Halaman Galeri
- Form pengaduan/aspirasi dengan validasi

## Instalasi

1. Pastikan sudah terpasang **PHP >= 8.2**, **Composer**, dan (opsional) **SQLite/MySQL**.
2. Install dependency:
   ```bash
   composer install
   ```
3. Salin file environment (jika belum ada `.env`):
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Buat file database SQLite (sudah disediakan `database/database.sqlite` kosong) lalu jalankan migrasi:
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```
   Atau gunakan MySQL dengan mengubah konfigurasi `DB_*` di `.env`.
5. Jalankan server:
   ```bash
   php artisan serve
   ```
6. Buka `http://localhost:8000` dan `http://localhost:8000/tentang` di browser.

## Struktur Penting

- `routes/web.php` — daftar route
- `app/Http/Controllers/TentangController.php` — data profil, visi misi, potensi, sejarah desa
- `resources/views/tentang.blade.php` — tampilan halaman "Tentang Desa"
- `resources/views/layouts/app.blade.php` — layout utama (menggunakan Tailwind CSS via CDN)

## Kustomisasi

- Ganti semua data contoh (nama desa, angka penduduk, sejarah, dsb) sesuai data desa Anda.
- Tambahkan tabel database + Eloquent Model jika ingin berita/galeri dikelola dari admin panel.
- Ganti Tailwind CDN dengan build Vite (`npm install && npm run build`) untuk produksi jika diperlukan.
