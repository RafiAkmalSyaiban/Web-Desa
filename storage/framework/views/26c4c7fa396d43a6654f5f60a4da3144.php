<?php $__env->startSection('title', 'Galeri - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-6xl mx-auto px-4 sm:px-6 py-16">
    <h1 class="text-3xl font-bold text-primary-700 mb-10 text-center">Galeri Desa</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php for($i = 1; $i <= 8; $i++): ?>
            <div class="aspect-square bg-primary-100 rounded-xl flex items-center justify-center text-primary-500 text-3xl">
                🖼️
            </div>
        <?php endfor; ?>
    </div>
    <p class="text-center text-sm text-gray-400 mt-8">Ganti placeholder di atas dengan foto kegiatan desa Anda.</p>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/galeri.blade.php ENDPATH**/ ?>