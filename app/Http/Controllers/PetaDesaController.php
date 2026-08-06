<?php

namespace App\Http\Controllers;

class PetaDesaController extends Controller
{
    public function index()
    {
        $lokasi = [
            'nama'    => 'Desa Citali',
            'alamat'  => 'Dusun Citali, Kecamatan Pamulihan, Kabupaten Sumedang, Kode Pos 45362',
            'lat'     => '-6.9147',   // ganti sesuai koordinat asli
            'lng'     => '107.7825', // ganti sesuai koordinat asli
        ];

        // Embed dengan marker pin otomatis di titik lokasi
        $mapEmbedUrl = "https://www.google.com/maps?q={$lokasi['lat']},{$lokasi['lng']}&z=15&output=embed";

        return view('peta.index', compact('mapEmbedUrl', 'lokasi'));
    }
}
