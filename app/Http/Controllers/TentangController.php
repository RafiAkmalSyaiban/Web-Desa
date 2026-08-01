<?php

namespace App\Http\Controllers;

class TentangController extends Controller
{
    public function index()
    {
        $profil = [
            'nama_desa' => 'Desa Citali',
            'kecamatan' => 'Kecamatan Pamulihan',
            'kabupaten' => 'Kabupaten Sumedang',
            'provinsi' => 'Provinsi Jawa Barat',
            'deskripsi' => 'Desa Citali berada di sisi barat wilayah kecamatan, berbatasan langsung dengan Kecamatan Tanjungsari, sekitar 3 km dari pusat kecamatan. Wilayahnya berupa dataran tinggi berbukit dengan ketinggian sekitar 932 mdpl.',
            'luas_wilayah' => '1.250 Ha',
            'penduduk_laki' => 2145,
            'penduduk_perempuan' => 2087,
            'jumlah_kk' => 1330,
            'tahun_berdiri' => 1984,
        ];

        $batasWilayah = [
            'utara' => 'Desa Gudang dan Desa Sukawangi (Kecamatan Tanjungsari)',
            'selatan' => 'Desa Ciptasari dan Desa Gudang (Kecamatan Tanjungsari)',
            'timur' => 'Desa Pamulihan dan Desa Ciptasari',
            'barat' => 'Desa Gudang (Kecamatan Tanjungsari)',
        ];

        $visi = 'Mewujudkan Desa Citali yang Mandiri, Sejahtera, dan Berbudaya';

        $misi = [
            'Mewujudkan tata kelola pemerintahan desa yang baik dan transparan',
            'Meningkatkan kualitas infrastruktur secara berkelanjutan',
            'Meningkatkan kualitas dan kuantitas sumber daya manusia',
            'Meningkatkan daya saing ekonomi berbasis inovasi dan potensi desa',
            'Meningkatkan kualitas pelayanan pendidikan, kesehatan, sosial, dan hukum',
        ];

        $penggunaanLahan = [
            ['label' => 'Kawasan Hutan dan Perbukitan', 'persen' => 41.20],
            ['label' => 'Perkebunan Kopi dan Cengkih', 'persen' => 23.15],
            ['label' => 'Sawah dan Ladang', 'persen' => 19.40],
            ['label' => 'Pemukiman', 'persen' => 10.35],
            ['label' => 'Kebun Campuran', 'persen' => 3.60],
            ['label' => 'Aliran Sungai', 'persen' => 1.55],
            ['label' => 'Fasilitas Umum', 'persen' => 0.75],
        ];

        $potensi = [
            [
                'judul' => 'Sumber Daya Alam',
                'ringkasan' => 'Topografi pegunungan dengan tanah subur, cocok untuk perkebunan kopi, cengkih, dan tanaman hortikultura dataran tinggi.',
                'poin' => [
                    'Perkebunan kopi dan cengkih sebagai komoditas unggulan',
                    'Sayuran dataran tinggi dan tanaman hortikultura',
                    'Sumber mata air pegunungan yang melimpah',
                    'Kawasan hutan sebagai area konservasi alam',
                ],
            ],
            [
                'judul' => 'Sumber Daya Manusia',
                'ringkasan' => 'Masyarakat memiliki budaya gotong royong dan musyawarah yang masih terjaga hingga kini.',
                'poin' => [
                    'Keterampilan bertani yang diwariskan turun-temurun',
                    'Tradisi musyawarah dalam pengambilan keputusan desa',
                    'Fasilitas pendidikan mulai dari TK hingga SMP',
                    'Semangat gotong royong dalam kegiatan pembangunan',
                ],
            ],
            [
                'judul' => 'Kelembagaan',
                'ringkasan' => 'Hubungan yang harmonis antara pemerintah desa dan berbagai lembaga serta kelompok masyarakat.',
                'poin' => [
                    'Sinergi antara Pemerintah Desa, LKMD, dan BPD',
                    'Kelompok Karang Taruna yang aktif',
                    'Kelompok Tani dan Gapoktan sebagai penggerak ekonomi',
                    'Kelompok keagamaan yang berperan dalam pembangunan desa',
                ],
            ],
            [
                'judul' => 'Sosial Budaya',
                'ringkasan' => 'Kehidupan bermasyarakat yang demokratis dan penuh toleransi antarwarga.',
                'poin' => [
                    'Pola kepemimpinan yang partisipatif',
                    'Toleransi tinggi antarwarga',
                    'Situasi sosial yang kondusif sejak awal berdirinya desa',
                    'Dinamika kehidupan politik lokal yang sehat',
                ],
            ],
        ];

        $sejarah = [
            'ringkasan' => 'Desa Citali merupakan hasil pemekaran dari Desa Ciptasari yang saat itu berada di wilayah Kecamatan Tanjungsari. Pemekaran ini dilandasi oleh Surat Keputusan Bupati Sumedang Nomor 146.1/SK.190-Pem/1984 tertanggal 16 Agustus 1984.',
            'detail' => 'Sebelum pemekaran, wilayah Citali merupakan bagian dari Desa Ciptasari dan mencakup area di bagian utara desa induknya. Seiring waktu, batas kecamatan turut berubah sehingga Desa Citali kini termasuk dalam wilayah Kecamatan Pamulihan, Kabupaten Sumedang.',
        ];

        $pemimpinUptd = ['Tokoh Masyarakat Pendiri Desa', 'Sesepuh Kampung Citali', 'Panitia Pemekaran Desa 1984', 'Perwakilan Desa Ciptasari'];

        $kepalaDesa = [
            ['nama' => 'Nama Kepala Desa', 'jabatan' => 'Penjabat Kepala Desa', 'periode' => '1984 - 1990'],
            ['nama' => 'Nama Kepala Desa', 'jabatan' => 'Kepala Desa', 'periode' => '1990 - 1998'],
            ['nama' => 'Nama Kepala Desa', 'jabatan' => 'Kepala Desa', 'periode' => '1999 - 2007'],
            ['nama' => 'Nama Kepala Desa', 'jabatan' => 'Kepala Desa', 'periode' => '2008 - 2019'],
            ['nama' => 'Nama Kepala Desa', 'jabatan' => 'Kepala Desa', 'periode' => '2020 - sekarang'],
        ];

        $kontak = [
            'alamat' => 'Jl. Raya Citali No. 11, Kec. Pamulihan, Kab. Sumedang, 45362',
            'telepon' => '(0261) 000-0000',
            'whatsapp' => '0812-0000-0000',
            'email' => 'info@citali.desa.id',
            'jam_layanan_weekday' => '08.00 - 16.00',
            'jam_layanan_weekend' => 'Tutup',
            'maps_embed' => 'https://www.google.com/maps?q=Kantor+Desa+Citali&output=embed',
        ];

        return view('tentang', compact(
            'profil', 'batasWilayah', 'visi', 'misi',
            'penggunaanLahan', 'potensi', 'sejarah',
            'pemimpinUptd', 'kepalaDesa', 'kontak'
        ));
    }
}
