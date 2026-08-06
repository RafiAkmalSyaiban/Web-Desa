

<?php $__env->startSection('title', 'Formulir Pengajuan - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="bg-gradient-to-r from-emerald-800 to-teal-500 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-16 text-center">
            <span class="inline-block px-4 py-1 rounded-full bg-white/15 text-sm font-medium mb-4">
                Layanan Online
            </span>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Formulir Pengajuan</h1>
            <p class="text-white/90 max-w-2xl mx-auto">
                Isi formulir di bawah untuk mengajukan surat atau layanan administrasi kependudukan.
                Pastikan data yang dimasukkan benar dan sesuai dokumen resmi.
            </p>
        </div>
    </section>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">

        
        <?php if(session('success')): ?>
            <div
                class="mb-6 rounded-xl bg-primary-50 border border-primary-100 text-primary-700 px-5 py-4 flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span><?php echo e(session('success')); ?></span>
            </div>
        <?php endif; ?>

        
        <?php if($errors->any()): ?>
            <div class="mb-6 rounded-xl bg-red-50 border border-red-100 text-red-700 px-5 py-4">
                <p class="font-semibold mb-2">Mohon periksa kembali isian Anda:</p>
                <ul class="list-disc list-inside text-sm space-y-1">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="rounded-2xl bg-white shadow-sm border border-gray-100 p-6 sm:p-8">
            <form action="<?php echo e(route('pengajuan.formulir.store')); ?>" method="POST" class="space-y-6">
                <?php echo csrf_field(); ?>

                
                <div>
                    <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <span class="h-6 w-1 rounded-full bg-primary-500"></span>
                        Data Pemohon
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div class="sm:col-span-2">
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1.5">Nama
                                Lengkap</label>
                            <input type="text" id="nama" name="nama" value="<?php echo e(old('nama')); ?>"
                                placeholder="Sesuai KTP"
                                class="w-full rounded-lg border border-gray-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="nik" class="block text-sm font-medium text-gray-700 mb-1.5">NIK</label>
                            <input type="text" id="nik" name="nik" value="<?php echo e(old('nik')); ?>" maxlength="16"
                                placeholder="16 digit NIK"
                                class="w-full rounded-lg border border-gray-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1.5">Nomor HP /
                                WhatsApp</label>
                            <input type="text" id="no_hp" name="no_hp" value="<?php echo e(old('no_hp')); ?>"
                                placeholder="08xxxxxxxxxx"
                                class="w-full rounded-lg border border-gray-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>

                        <div class="sm:col-span-2">
                            <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1.5">Alamat
                                Lengkap</label>
                            <textarea id="alamat" name="alamat" rows="2" placeholder="Sesuai domisili saat ini"
                                class="w-full rounded-lg border border-gray-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"><?php echo e(old('alamat')); ?></textarea>
                        </div>
                    </div>
                </div>

                
                <div>
                    <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <span class="h-6 w-1 rounded-full bg-primary-500"></span>
                        Detail Pengajuan
                    </h2>
                    <div class="space-y-5">
                        <div>
                            <label for="jenis_surat" class="block text-sm font-medium text-gray-700 mb-1.5">Jenis Surat /
                                Layanan</label>
                            <select id="jenis_surat" name="jenis_surat"
                                class="w-full rounded-lg border border-gray-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                <option value="" disabled selected>Pilih jenis surat</option>
                                <option value="Surat Keterangan Domisili" <?php if(old('jenis_surat') == 'Surat Keterangan Domisili'): echo 'selected'; endif; ?>>Surat Keterangan
                                    Domisili</option>
                                <option value="Surat Keterangan Usaha" <?php if(old('jenis_surat') == 'Surat Keterangan Usaha'): echo 'selected'; endif; ?>>Surat Keterangan Usaha
                                </option>
                                <option value="Surat Keterangan Tidak Mampu" <?php if(old('jenis_surat') == 'Surat Keterangan Tidak Mampu'): echo 'selected'; endif; ?>>Surat Keterangan
                                    Tidak Mampu</option>
                                <option value="Surat Pengantar KTP/KK" <?php if(old('jenis_surat') == 'Surat Pengantar KTP/KK'): echo 'selected'; endif; ?>>Surat Pengantar KTP/KK
                                </option>
                                <option value="Surat Keterangan Kelahiran" <?php if(old('jenis_surat') == 'Surat Keterangan Kelahiran'): echo 'selected'; endif; ?>>Surat Keterangan
                                    Kelahiran</option>
                                <option value="Surat Keterangan Kematian" <?php if(old('jenis_surat') == 'Surat Keterangan Kematian'): echo 'selected'; endif; ?>>Surat Keterangan
                                    Kematian</option>
                                <option value="Lainnya" <?php if(old('jenis_surat') == 'Lainnya'): echo 'selected'; endif; ?>>Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label for="keperluan" class="block text-sm font-medium text-gray-700 mb-1.5">Keperluan</label>
                            <textarea id="keperluan" name="keperluan" rows="3" placeholder="Jelaskan singkat keperluan pengajuan surat ini"
                                class="w-full rounded-lg border border-gray-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"><?php echo e(old('keperluan')); ?></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="w-full sm:w-auto px-8 py-3 rounded-full bg-primary-600 text-white font-semibold hover:bg-primary-700 transition-colors">
                    Kirim Pengajuan
                </button>
            </form>
        </div>

        <p class="text-center text-sm text-gray-500 mt-6">
            Butuh bantuan? Hubungi kantor desa langsung melalui halaman
            <a href="<?php echo e(route('tentang')); ?>" class="text-primary-700 font-medium hover:underline">Tentang Desa</a>.
        </p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/pengajuan/formulir.blade.php ENDPATH**/ ?>