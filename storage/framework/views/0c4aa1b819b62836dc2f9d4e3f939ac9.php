<?php $__env->startSection('title', 'Struktur Organisasi - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>
    <section class="bg-gradient-to-b from-primary-100 to-primary-50 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <h1 class="text-3xl font-bold text-primary-700 mb-14 text-center">Struktur Organisasi</h1>

            <?php
                // NOTE: sesuaikan route('struktur.profil', $globalIndex) dengan route
                // yang mengarah ke view profil.blade.php (lihat file terpisah).
                // Controllernya tinggal ambil $struktur[$globalIndex] lalu return view('profil', ['item' => $item]).
                $card = function ($item, $globalIndex) {
                    return '
        <a href="' .
                        route('struktur.profil', $globalIndex) .
                        '" class="group block text-left w-48 border border-gray-100 rounded-2xl p-4 text-center shadow-sm bg-white hover:shadow-lg hover:-translate-y-0.5 hover:border-primary-200 transition-all duration-200">
            <div class="mx-auto h-14 w-14 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-lg font-bold mb-2 ring-4 ring-primary-50 group-hover:ring-primary-100 transition">
                ' .
                        substr($item['nama'], 0, 1) .
                        '
            </div>
            <h3 class="font-semibold text-sm text-gray-800">' .
                        $item['nama'] .
                        '</h3>
            <p class="text-xs text-primary-600 font-medium mt-0.5">' .
                        $item['jabatan'] .
                        '</p>
        </a>';
                };
                $cardFull = function ($item, $globalIndex) {
                    return '
        <a href="' .
                        route('struktur.profil', $globalIndex) .
                        '" class="group block text-left w-full border border-gray-100 rounded-2xl p-3 text-center shadow-sm bg-white hover:shadow-lg hover:-translate-y-0.5 hover:border-primary-200 transition-all duration-200">
            <div class="mx-auto h-12 w-12 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-base font-bold mb-2 ring-4 ring-primary-50 group-hover:ring-primary-100 transition">
                ' .
                        substr($item['nama'], 0, 1) .
                        '
            </div>
            <h3 class="font-semibold text-xs sm:text-sm leading-tight text-gray-800">' .
                        $item['nama'] .
                        '</h3>
            <p class="text-[11px] sm:text-xs text-primary-600 font-medium mt-0.5">' .
                        $item['jabatan'] .
                        '</p>
        </a>';
                };
                $index = 0;
            ?>

            <div class="flex flex-col items-center">

                
                <?php $__currentLoopData = $byLevel[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $card($item, $index); ?>

                    <?php $index++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="w-px h-8 bg-gray-300"></div>

                
                <?php $__currentLoopData = $byLevel[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $card($item, $index); ?>

                    <?php $index++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="w-px h-8 bg-gray-300"></div>

                
                <div class="w-full">
                    <div class="hidden md:block border-t border-gray-300 w-5/6 mx-auto"></div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 lg:gap-4 pt-8">
                        <?php $__currentLoopData = $byLevel[3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="relative flex flex-col items-center">
                                <div class="hidden md:block absolute -top-8 left-1/2 -translate-x-1/2 w-px h-8 bg-gray-300">
                                </div>
                                <?php echo $cardFull($item, $index); ?>

                            </div>
                            <?php $index++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="w-px h-8 bg-gray-300"></div>

                
                <div class="w-full max-w-xl mx-auto">
                    <div class="hidden md:block border-t border-gray-300 w-2/3 mx-auto"></div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 lg:gap-4 pt-8">
                        <?php $__currentLoopData = $byLevel[4]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="relative flex flex-col items-center">
                                <div class="hidden md:block absolute -top-8 left-1/2 -translate-x-1/2 w-px h-8 bg-gray-300">
                                </div>
                                <?php echo $cardFull($item, $index); ?>

                            </div>
                            <?php $index++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/struktur.blade.php ENDPATH**/ ?>