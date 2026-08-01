<?php $__env->startSection('title', 'Tentang Desa - ' . config('app.name')); ?>
<?php $__env->startSection('meta_description', 'Mengenal profil, sejarah, visi misi, dan potensi ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>


<section class="bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold mb-4 text-primary-700">Tentang <?php echo e($profil['nama_desa']); ?></h1>
        <p class="max-w-2xl mx-auto text-gray-500">
            Mengenal lebih dekat sejarah, visi misi, dan potensi desa yang kaya akan budaya dan tradisi
        </p>
    </div>
</section>


<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-2xl font-bold mb-4 text-primary-700">Profil Desa</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                <?php echo e($profil['nama_desa']); ?> merupakan salah satu desa di <?php echo e($profil['kecamatan']); ?>,
                <?php echo e($profil['kabupaten']); ?>, <?php echo e($profil['provinsi']); ?>. <?php echo e($profil['deskripsi']); ?>

            </p>
            <p class="text-gray-600 leading-relaxed">
                Desa ini memiliki luas wilayah <?php echo e($profil['luas_wilayah']); ?> dengan jumlah penduduk
                <?php echo e(number_format($profil['penduduk_laki'] + $profil['penduduk_perempuan'])); ?> jiwa,
                terdiri dari <?php echo e(number_format($profil['penduduk_laki'])); ?> laki-laki dan
                <?php echo e(number_format($profil['penduduk_perempuan'])); ?> perempuan, serta
                <?php echo e(number_format($profil['jumlah_kk'])); ?> Kepala Keluarga.
            </p>
        </div>
        <div class="bg-white rounded-2xl p-10 text-center shadow-sm">
            <div class="mx-auto h-24 w-24 rounded-full bg-primary-600 text-white flex items-center justify-center text-2xl font-bold mb-4">DC</div>
            <h3 class="text-xl font-bold text-primary-700"><?php echo e($profil['nama_desa']); ?></h3>
            <p class="text-gray-500">Guyub Rukun Membangun Desa</p>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-primary-700">Data Wilayah</h2>
            <p class="text-gray-500">Informasi terkini mengenai demografi dan administrasi <?php echo e($profil['nama_desa']); ?></p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center mb-14">
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700"><?php echo e($profil['luas_wilayah']); ?></div>
                <div class="text-sm text-gray-500 mt-1">Luas Wilayah</div>
            </div>
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700"><?php echo e(number_format($profil['penduduk_laki'] + $profil['penduduk_perempuan'])); ?></div>
                <div class="text-sm text-gray-500 mt-1">Jumlah Penduduk</div>
            </div>
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700"><?php echo e(number_format($profil['jumlah_kk'])); ?></div>
                <div class="text-sm text-gray-500 mt-1">Kepala Keluarga</div>
            </div>
            <div class="bg-primary-50 rounded-xl p-6">
                <div class="text-2xl font-bold text-primary-700"><?php echo e($profil['tahun_berdiri']); ?></div>
                <div class="text-sm text-gray-500 mt-1">Tahun Berdiri</div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <h3 class="sm:col-span-2 lg:col-span-4 font-semibold text-lg mb-1">Batas Wilayah</h3>
            <?php $__currentLoopData = $batasWilayah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arah => $keterangan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border border-gray-100 rounded-xl p-5 shadow-sm">
                <div class="text-sm uppercase tracking-wide text-primary-600 font-semibold mb-1"><?php echo e(ucfirst($arah)); ?></div>
                <div class="text-gray-600 text-sm"><?php echo e($keterangan); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-10">
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm flex flex-col justify-center">
            <h2 class="text-xl font-bold mb-3 text-primary-700">Visi</h2>
            <p class="text-lg italic text-gray-600">&ldquo;<?php echo e($visi); ?>&rdquo;</p>
        </div>
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-4 text-primary-700">Misi</h2>
            <ul class="space-y-3">
                <?php $__currentLoopData = $misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="flex gap-3 text-gray-600">
                    <span class="mt-1 h-2 w-2 rounded-full bg-primary-600 shrink-0"></span>
                    <?php echo e($item); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-primary-700">Potensi <?php echo e($profil['nama_desa']); ?></h2>
            <p class="text-gray-500 max-w-2xl mx-auto">
                Desa ini memiliki potensi besar baik dari sisi sumber daya alam, sumber daya manusia,
                kelembagaan, maupun sosial budaya.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
            <?php $__currentLoopData = $potensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border border-gray-100 rounded-xl p-6 shadow-sm">
                <h3 class="font-semibold text-primary-700 mb-2"><?php echo e($p['judul']); ?></h3>
                <p class="text-sm text-gray-500 mb-3"><?php echo e($p['ringkasan']); ?></p>
                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                    <?php $__currentLoopData = $p['poin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($poin); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div>
            <h3 class="font-semibold text-lg mb-4">Persentase Penggunaan Lahan</h3>
            <div class="space-y-3">
                <?php $__currentLoopData = $penggunaanLahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600"><?php echo e($lahan['label']); ?></span>
                        <span class="font-medium text-primary-700"><?php echo e(number_format($lahan['persen'], 2)); ?>%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-primary-600 h-2 rounded-full" style="width: <?php echo e(min($lahan['persen'] * 2, 100)); ?>%"></div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>


<section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <h2 class="text-2xl font-bold mb-6 text-primary-700">Sejarah Singkat</h2>
        <p class="text-gray-600 leading-relaxed mb-4"><?php echo e($sejarah['ringkasan']); ?></p>
        <p class="text-gray-600 leading-relaxed mb-8"><?php echo e($sejarah['detail']); ?></p>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold mb-3">Tokoh Perintis Pemekaran Desa</h3>
                <ul class="space-y-2 text-gray-600 text-sm list-disc list-inside">
                    <?php $__currentLoopData = $pemimpinUptd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($nama); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold mb-3">Kepemimpinan Desa</h3>
                <ul class="divide-y divide-gray-100 text-sm">
                    <?php $__currentLoopData = $kepalaDesa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="py-2 flex justify-between gap-4">
                        <div>
                            <div class="font-medium text-gray-700"><?php echo e($k['nama']); ?></div>
                            <div class="text-gray-400"><?php echo e($k['jabatan']); ?></div>
                        </div>
                        <div class="text-primary-600 font-medium whitespace-nowrap"><?php echo e($k['periode']); ?></div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-primary-700">Hubungi Kami</h2>
            <p class="text-gray-500">Sampaikan aspirasi, pengaduan, atau pertanyaan Anda kepada kami</p>
        </div>

        <?php if(session('status')): ?>
        <div class="max-w-2xl mx-auto mb-6 bg-primary-50 text-primary-700 border border-primary-100 rounded-lg px-4 py-3 text-sm">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>

        <div class="grid md:grid-cols-2 gap-10">
            <form method="POST" action="<?php echo e(route('pengaduan.store')); ?>" class="bg-gray-50 rounded-2xl p-6 space-y-4">
                <?php echo csrf_field(); ?>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" value="<?php echo e(old('nama')); ?>" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required>
                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-500 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-500 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Nomor Telepon</label>
                        <input type="text" name="telepon" value="<?php echo e(old('telepon')); ?>" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500">
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
                    <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-500 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Pesan</label>
                    <textarea name="pesan" rows="4" class="w-full rounded-lg border-gray-200 focus:ring-primary-500 focus:border-primary-500" required><?php echo e(old('pesan')); ?></textarea>
                    <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-500 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 rounded-lg transition">
                    Kirim Pengaduan
                </button>
            </form>

            <div>
                <div class="rounded-2xl overflow-hidden shadow-sm mb-6 aspect-video">
                    <iframe src="<?php echo e($kontak['maps_embed']); ?>" class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="grid sm:grid-cols-2 gap-4 text-sm">
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Alamat</div>
                        <div class="text-gray-500"><?php echo e($kontak['alamat']); ?></div>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Telepon</div>
                        <div class="text-gray-500"><?php echo e($kontak['telepon']); ?><br>WhatsApp: <?php echo e($kontak['whatsapp']); ?></div>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Email</div>
                        <div class="text-gray-500"><?php echo e($kontak['email']); ?></div>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-1">Jam Pelayanan</div>
                        <div class="text-gray-500">Senin - Jumat: <?php echo e($kontak['jam_layanan_weekday']); ?><br>Sabtu - Minggu: <?php echo e($kontak['jam_layanan_weekend']); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/tentang.blade.php ENDPATH**/ ?>