

<?php $__env->startSection('title', $item['nama'] . ' - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative min-h-screen bg-gradient-to-b from-primary-100 via-primary-50 to-white py-16 overflow-hidden">

        
        <div class="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-primary-200/40 blur-3xl"></div>
        <div class="pointer-events-none absolute top-1/3 -right-20 h-80 w-80 rounded-full bg-primary-300/30 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 left-1/4 h-64 w-64 rounded-full bg-primary-200/30 blur-3xl"></div>

        <div class="relative max-w-2xl mx-auto px-4 sm:px-6">

            
            <a href="<?php echo e(route('struktur')); ?>"
                class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 hover:text-primary-800 mb-6 transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:-translate-x-1"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Struktur Organisasi
            </a>

            <div class="bg-white rounded-3xl shadow-xl shadow-primary-900/5 border border-primary-100/60 overflow-hidden">

                
                <div class="px-6 sm:px-10 pb-8 pt-10 text-center">
                    <div
                        class="mx-auto h-32 w-32 rounded-full p-1 bg-gradient-to-br from-primary-500 to-emerald-700 shadow-lg ring-4 ring-white">
                        <div class="h-full w-full rounded-full bg-white flex items-center justify-center">
                            <div
                                class="h-[92%] w-[92%] rounded-full bg-gradient-to-br from-primary-600 to-emerald-700 text-white flex items-center justify-center text-4xl font-bold">
                                <?php echo e(substr($item['nama'], 0, 1)); ?>

                            </div>
                        </div>
                    </div>

                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-5"><?php echo e($item['nama']); ?></h1>
                    <span
                        class="inline-flex items-center gap-1.5 mt-3 text-sm font-semibold text-white bg-gradient-to-r from-primary-600 to-emerald-700 px-4 py-1.5 rounded-full shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-1 1v9a1 1 0 001 1h10a1 1 0 001-1V8a1 1 0 00-1-1h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4z" />
                        </svg>
                        <?php echo e($item['jabatan']); ?>

                    </span>
                </div>

                
                <div class="px-6 sm:px-10 pb-10">
                    <div class="grid sm:grid-cols-3 gap-4 max-w-xl mx-auto">

                        <div
                            class="rounded-2xl bg-white border border-gray-100 p-5 flex flex-col items-center text-center gap-2 hover:shadow-sm transition-shadow">
                            <div
                                class="h-10 w-10 rounded-full bg-white text-primary-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-xs text-gray-400">Tempat, Tanggal Lahir</p>
                            <p class="text-sm font-semibold text-gray-700"><?php echo e($item['ttl']); ?></p>
                        </div>

                        <div
                            class="rounded-2xl bg-white border border-gray-100 p-5 flex flex-col items-center text-center gap-2 hover:shadow-sm transition-shadow">
                            <div
                                class="h-10 w-10 rounded-full bg-white text-primary-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12.083 12.083 0 0112 20.055 12.083 12.083 0 015.84 10.58L12 14zm0 0v6.5" />
                                </svg>
                            </div>
                            <p class="text-xs text-gray-400">Pendidikan Terakhir</p>
                            <p class="text-sm font-semibold text-gray-700"><?php echo e($item['pendidikan']); ?></p>
                        </div>

                        <div
                            class="rounded-2xl bg-white border border-gray-100 p-5 flex flex-col items-center text-center gap-2 hover:shadow-sm transition-shadow">
                            <div
                                class="h-10 w-10 rounded-full bg-white text-primary-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <p class="text-xs text-gray-400">Alamat</p>
                            <p class="text-sm font-semibold text-gray-700"><?php echo e($item['alamat']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/struktur-profil.blade.php ENDPATH**/ ?>