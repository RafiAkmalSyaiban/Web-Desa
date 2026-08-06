

<?php $__env->startSection('title', 'Pengajuan Adminduk - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="bg-gradient-to-r from-emerald-800 to-teal-500 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-16 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/15 text-sm font-medium mb-4">
                Layanan Administrasi Kependudukan
            </span>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Pengajuan Adminduk</h1>
            <p class="text-white/90 max-w-2xl mx-auto">
                Layanan pengurusan administrasi kependudukan warga desa — mulai dari perubahan data,
                pindah domisili, hingga dokumen kependudukan lainnya.
            </p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 py-12 space-y-16">

        
        <section>
            <h2 class="text-xl font-bold text-gray-800 mb-6">Jenis Layanan Adminduk</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php
                    $layanan = [
                        ['Perubahan Data Kependudukan', 'Perbaikan nama, alamat, atau data lain yang keliru.'],
                        ['Pindah Datang Penduduk', 'Pengurusan surat pindah masuk atau keluar desa.'],
                        ['Pencatatan Kelahiran', 'Pendaftaran kelahiran anak untuk penerbitan akta.'],
                        ['Pencatatan Kematian', 'Pelaporan kematian warga untuk penerbitan akta.'],
                        ['Perubahan Status Perkawinan', 'Update data pernikahan atau perceraian di KK.'],
                        ['Legalisir Dokumen Kependudukan', 'Legalisir fotokopi KTP, KK, atau akta.'],
                    ];
                ?>

                <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$judul, $desk]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="rounded-xl border border-gray-100 bg-white shadow-sm p-5 hover:shadow-md transition-shadow">
                        <div
                            class="h-10 w-10 rounded-lg bg-primary-50 text-primary-700 flex items-center justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-5.13a4 4 0 11-8 0 4 4 0 018 0zm6 3a4 4 0 10-8 0" />
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
                    <?php $__currentLoopData = ['Fotokopi KTP dan Kartu Keluarga (KK) asli', 'Dokumen pendukung sesuai jenis layanan (akta, surat nikah, dll)', 'Surat pengantar dari RT/RW', 'Materai (jika diperlukan)']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syarat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = ['Siapkan dokumen persyaratan sesuai jenis layanan', 'Isi formulir pengajuan secara online', 'Verifikasi berkas oleh petugas desa', 'Data diproses & diteruskan ke Disdukcapil bila diperlukan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $langkah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                Klik tombol di bawah untuk mengisi formulir pengajuan adminduk secara online.
            </p>
            <a href="<?php echo e(route('pengajuan.formulir')); ?>"
                class="inline-block px-6 py-3 rounded-full bg-white text-primary-700 font-semibold hover:bg-primary-50 transition-colors">
                Isi Formulir Pengajuan
            </a>
        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/pengajuan/admininduk.blade.php ENDPATH**/ ?>