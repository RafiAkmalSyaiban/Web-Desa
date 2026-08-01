<?php $__env->startSection('title', 'Detail Berita - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-3xl mx-auto px-4 sm:px-6 py-16">
    <a href="<?php echo e(route('berita.index')); ?>" class="text-sm text-primary-600 hover:underline">&larr; Kembali ke Berita</a>
    <h1 class="text-2xl sm:text-3xl font-bold text-primary-700 mt-4 mb-6 capitalize"><?php echo e(str_replace('-', ' ', $slug)); ?></h1>
    <p class="text-gray-600 leading-relaxed">
        Konten berita lengkap dapat ditambahkan di sini, misalnya diambil dari database.
        Halaman ini adalah contoh detail berita berdasarkan slug: <strong><?php echo e($slug); ?></strong>.
    </p>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/berita/show.blade.php ENDPATH**/ ?>