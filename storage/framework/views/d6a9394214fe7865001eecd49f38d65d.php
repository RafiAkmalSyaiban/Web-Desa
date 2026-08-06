

<?php $__env->startSection('title', 'Pengajuan Penerbitan Surat - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="bg-gradient-to-r from-emerald-800 to-teal-500 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-16 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/15 text-sm font-medium mb-4">
                Layanan Administrasi
            </span>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Pengajuan Penerbitan Surat</h1>
            <p class="text-white/90 max-w-2xl mx-auto">
                Ajukan penerbitan surat resmi desa secara online. Lebih cepat, mudah, dan tidak perlu
                bolak-balik ke kantor desa.
            </p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 py-12 space-y-16">

        
        <section>
            <h2 class="text-xl font-bold text-gray-800 mb-6">Jenis Surat yang Bisa Diajukan</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php
                    $jenisSurat = [
                        ['Surat Keterangan Domisili', 'Bukti tempat tinggal untuk keperluan administrasi.'],
                        ['Surat Keterangan Usaha', 'Untuk keperluan perizinan atau pengajuan pinjaman usaha.'],
                        ['Surat Keterangan Tidak Mampu', 'Untuk keperluan bantuan sosial atau beasiswa.'],
                        ['Surat Pengantar KTP/KK', 'Pengantar untuk pembuatan atau perubahan data kependudukan.'],
                        ['Surat Keterangan Kelahiran', 'Pengantar sebelum pengurusan akta kelahiran.'],
                        ['Surat Keterangan Kematian', 'Pengantar sebelum pengurusan akta kematian.'],
                    ];
                ?>

                <?php $__currentLoopData = $jenisSurat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$judul, $desk]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="rounded-xl border border-gray-100 bg-white shadow-sm p-5 hover:shadow-md transition-shadow">
                        <div
                            class="h-10 w-10 rounded-lg bg-primary-50 text-primary-700 flex items-center justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-1"><?php echo e($judul); ?></h3>
                        <p class="text-sm text-gray-500"><?php echo e($desk); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        
        <div class="grid md:grid-cols-2 gap-10">
            
            <section>
                <h2 class="text-xl font-bold text-gray-800 mb-6">Syarat Pengajuan</h2>
                <ul class="space-y-3">
                    <?php $__currentLoopData = ['Fotokopi KTP pemohon', 'Fotokopi Kartu Keluarga (KK)', 'Surat pengantar RT/RW', 'Dokumen pendukung sesuai jenis surat (jika ada)']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syarat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="flex items-start gap-3">
                            <span
                                class="mt-0.5 flex-shrink-0 h-5 w-5 rounded-full bg-primary-500 text-white flex items-center justify-center text-xs">
                                ✓
                            </span>
                            <span class="text-gray-600"><?php echo e($syarat); ?></span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </section>

            
            <section>
                <h2 class="text-xl font-bold text-gray-800 mb-6">Alur Pengajuan</h2>
                <ol class="space-y-4">
                    <?php $__currentLoopData = ['Siapkan dokumen persyaratan', 'Isi formulir pengajuan di bawah', 'Verifikasi oleh petugas desa', 'Surat selesai & dapat diambil di kantor desa']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $langkah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="flex items-start gap-4">
                            <span
                                class="flex-shrink-0 h-8 w-8 rounded-full bg-primary-700 text-white flex items-center justify-center font-semibold text-sm">
                                <?php echo e($i + 1); ?>

                            </span>
                            <span class="text-gray-600 pt-1"><?php echo e($langkah); ?></span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </section>
        </div>

        
        <section class="rounded-2xl bg-gradient-to-r from-emerald-800 to-teal-500 text-white p-8 sm:p-10 text-center">
            <h2 class="text-2xl font-bold mb-3">Siap Mengajukan?</h2>
            <p class="text-white/90 mb-6 max-w-xl mx-auto">
                Klik tombol di bawah untuk mengisi formulir pengajuan penerbitan surat secara online.
            </p>
            <a href="<?php echo e(route('pengajuan.formulir')); ?>"
                class="inline-block px-6 py-3 rounded-full bg-white text-primary-700 font-semibold hover:bg-primary-50 transition-colors">
                Isi Formulir Pengajuan
            </a>
        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/pengajuan/penerbitan.blade.php ENDPATH**/ ?>