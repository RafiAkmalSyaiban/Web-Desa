<?php

namespace App\Http\Controllers;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = collect([
            ['slug' => 'musyawarah-desa-2026', 'judul' => 'Musyawarah Desa Bahas RKP 2026', 'tanggal' => '20 Juli 2026', 'ringkasan' => 'Pemerintah desa bersama BPD dan tokoh masyarakat menyusun rencana kerja pemerintah desa untuk tahun mendatang.'],
            ['slug' => 'panen-raya', 'judul' => 'Panen Raya Kelompok Tani Maju Bersama', 'tanggal' => '05 Juli 2026', 'ringkasan' => 'Hasil panen tahun ini meningkat berkat program pendampingan pertanian dari pemerintah desa.'],
            ['slug' => 'posyandu-rutin', 'judul' => 'Kegiatan Posyandu Rutin Bulan Ini', 'tanggal' => '01 Juli 2026', 'ringkasan' => 'Pemeriksaan kesehatan ibu dan anak dilaksanakan serentak di seluruh dusun.'],
        ]);

        return view('berita.index', compact('berita'));
    }

    public function show(string $slug)
    {
        return view('berita.show', compact('slug'));
    }
}
