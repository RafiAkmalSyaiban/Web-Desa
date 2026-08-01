<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PengaduanController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'nullable|string|max:20',
            'kategori' => 'required|string|max:100',
            'pesan' => 'required|string|max:2000',
        ]);

        // TODO: simpan ke database atau kirim notifikasi (email/WhatsApp)
        // Pengaduan::create($validated);

        return redirect()
            ->route('tentang')
            ->with('status', 'Terima kasih, pengaduan/aspirasi Anda telah kami terima.');
    }
}
