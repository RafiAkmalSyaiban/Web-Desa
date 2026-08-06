<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class StrukturController extends Controller
{
    /**
     * Data struktur organisasi.
     */
    protected function data(): Collection
    {
        return collect([
            ['level' => 1, 'jabatan' => 'Kepala Desa', 'nama' => 'Nana Nuryana', 'ttl' => 'Sumedang, 12 Mei 1975', 'pendidikan' => 'S1 Administrasi Negara', 'alamat' => 'Dusun Citali RT 01/RW 02', 'no_hp' => '0812-1111-0001'],
            ['level' => 2, 'jabatan' => 'Sekretaris Desa', 'nama' => 'Nenden Siti Hujaemah', 'ttl' => 'Sumedang, 03 Agustus 1980', 'pendidikan' => 'S1 Ilmu Pemerintahan', 'alamat' => 'Dusun Cikubang RT 02/RW 02', 'no_hp' => '0812-1111-0002'],
            ['level' => 3, 'jabatan' => 'Kaur Umum', 'nama' => 'Nuroni Hidayat', 'ttl' => 'Sumedang, 21 Januari 1985', 'pendidikan' => 'SMA', 'alamat' => 'Dusun Citali RT 03/RW 02', 'no_hp' => '0812-1111-0003'],
            ['level' => 3, 'jabatan' => 'Kaur Keuangan', 'nama' => 'Irma Aliyah Resmini', 'ttl' => 'Sumedang, 15 Maret 1988', 'pendidikan' => 'D3 Akuntansi', 'alamat' => 'Dusun Lemahneundeut RT 01/RW 03', 'no_hp' => '0812-1111-0004'],
            ['level' => 3, 'jabatan' => 'Kaur Perencanaan', 'nama' => 'Toni Sobari', 'ttl' => 'Sumedang, 09 Juni 1983', 'pendidikan' => 'S1 Ekonomi Pembangunan', 'alamat' => 'Dusun Cikubang RT 01/RW 02', 'no_hp' => '0812-1111-0005'],
            ['level' => 3, 'jabatan' => 'Kasi Pemerintahan', 'nama' => 'Ahmad Kusmayanto', 'ttl' => 'Sumedang, 27 Oktober 1979', 'pendidikan' => 'S1 Ilmu Pemerintahan', 'alamat' => 'Dusun Citali RT 02/RW 01', 'no_hp' => '0812-1111-0006'],
            ['level' => 3, 'jabatan' => 'Kasi Pelayanan', 'nama' => 'Dena Novia Purwanti', 'ttl' => 'Sumedang, 18 Februari 1990', 'pendidikan' => 'S1 Administrasi Publik', 'alamat' => 'Dusun Lemahneundeut RT 02/RW 03', 'no_hp' => '0812-1111-0007'],
            ['level' => 3, 'jabatan' => 'Kasi Kesejahteraan', 'nama' => 'Fitri Yastuti', 'ttl' => 'Sumedang, 30 April 1987', 'pendidikan' => 'S1 Kesejahteraan Sosial', 'alamat' => 'Dusun Citali RT 01/RW 01', 'no_hp' => '0812-1111-0008'],
            ['level' => 4, 'jabatan' => 'Kepala Dusun I', 'nama' => 'Febriansyah Jaya Saputra', 'ttl' => 'Sumedang, 14 Juli 1982', 'pendidikan' => 'SMA', 'alamat' => 'Dusun Citali RT 04/RW 01', 'no_hp' => '0812-1111-0009'],
            ['level' => 4, 'jabatan' => 'Kepala Dusun II', 'nama' => 'Jajang Rusmana', 'ttl' => 'Sumedang, 05 September 1978', 'pendidikan' => 'SMA', 'alamat' => 'Dusun Cikubang RT 03/RW 02', 'no_hp' => '0812-1111-0010'],
            ['level' => 4, 'jabatan' => 'Kepala Dusun III', 'nama' => 'Rizki Hadi Falah', 'ttl' => 'Sumedang, 22 Desember 1991', 'pendidikan' => 'SMA', 'alamat' => 'Dusun Lemahneundeut RT 01/RW 03', 'no_hp' => '0812-1111-0011'],
        ]);
    }

    /**
     * Halaman daftar struktur organisasi.
     */
    public function index()
    {
        $struktur = $this->data();

        return view('struktur', [
            'struktur' => $struktur,
            'byLevel' => $struktur->groupBy('level'),
        ]);
    }

    /**
     * Halaman detail/profil salah satu anggota struktur.
     * $index diambil dari posisi urutan data (0, 1, 2, ...).
     */
    public function profil($index)
    {
        $struktur = $this->data();

        if (!is_numeric($index) || !$struktur->has((int) $index)) {
            abort(404, 'Data struktur organisasi tidak ditemukan.');
        }

        $item = $struktur->get((int) $index);

        return view('struktur-profil', [
            'item' => $item,
        ]);
    }
}
