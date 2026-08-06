<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function penerbitan()
    {
        return view('pengajuan.penerbitan');
    }

    public function admininduk()
    {
        return view('pengajuan.admininduk');
    }

    public function kk()
    {
        return view('pengajuan.kk');
    }

    public function jalur()
    {
        return view('pengajuan.jalur');
    }

    public function formulir()
    {
        return view('pengajuan.formulir');
    }

    public function formulirStore(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'nik'       => 'required|digits:16',
            'alamat'    => 'required|string|max:500',
            'no_hp'     => 'required|string|max:20',
            'jenis_surat' => 'required|string',
            'keperluan' => 'required|string|max:1000',
        ]);

        // TODO: simpan $validated ke database (buat model & migration Pengajuan jika diperlukan)
        // Pengajuan::create($validated);

        return redirect()
            ->route('pengajuan.formulir')
            ->with('success', 'Pengajuan Anda berhasil dikirim. Petugas desa akan memproses dalam 1-3 hari kerja.');
    }
}
