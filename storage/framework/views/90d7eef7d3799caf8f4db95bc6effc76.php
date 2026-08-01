<header class="bg-gradient-to-r from-emerald-800 to-teal-500 shadow-sm sticky top-0 z-50">
    <nav class="max-w-6xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between">
        <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-2 font-bold text-white text-lg">
            <span class="inline-flex h-9 w-9 rounded-full bg-white text-primary-700 items-center justify-center text-sm">DC</span>
            <?php echo e(config('app.name')); ?>

        </a>

        <button id="navToggle" class="md:hidden text-white" aria-label="Buka menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <ul id="navMenu" class="hidden md:flex items-center gap-6 text-sm font-medium">
            <li><a href="<?php echo e(route('home')); ?>" class="text-white/90 hover:text-white <?php echo e(request()->routeIs('home') ? 'text-white font-semibold' : ''); ?>">Home</a></li>
            <li><a href="<?php echo e(route('berita.index')); ?>" class="text-white/90 hover:text-white <?php echo e(request()->routeIs('berita.*') ? 'text-white font-semibold' : ''); ?>">Berita</a></li>
            <li><a href="<?php echo e(route('struktur')); ?>" class="text-white/90 hover:text-white <?php echo e(request()->routeIs('struktur') ? 'text-white font-semibold' : ''); ?>">Struktur Organisasi</a></li>
            <li><a href="<?php echo e(route('galeri')); ?>" class="text-white/90 hover:text-white <?php echo e(request()->routeIs('galeri') ? 'text-white font-semibold' : ''); ?>">Galeri</a></li>
            <li><a href="<?php echo e(route('tentang')); ?>" class="px-4 py-2 rounded-full bg-white text-primary-700 hover:bg-primary-50 <?php echo e(request()->routeIs('tentang') ? 'ring-2 ring-white/60' : ''); ?>">Tentang Desa</a></li>
        </ul>
    </nav>

    <ul id="navMenuMobile" class="hidden md:hidden flex-col gap-1 px-4 pb-4 text-sm font-medium bg-gradient-to-r from-emerald-800 to-teal-500">
        <li><a href="<?php echo e(route('home')); ?>" class="block py-2 text-white/90 hover:text-white">Home</a></li>
        <li><a href="<?php echo e(route('berita.index')); ?>" class="block py-2 text-white/90 hover:text-white">Berita</a></li>
        <li><a href="<?php echo e(route('struktur')); ?>" class="block py-2 text-white/90 hover:text-white">Struktur Organisasi</a></li>
        <li><a href="<?php echo e(route('galeri')); ?>" class="block py-2 text-white/90 hover:text-white">Galeri</a></li>
        <li><a href="<?php echo e(route('tentang')); ?>" class="block py-2 font-semibold text-white">Tentang Desa</a></li>
    </ul>
</header>

<script>
    const navToggle = document.getElementById('navToggle');
    const navMenuMobile = document.getElementById('navMenuMobile');
    navToggle?.addEventListener('click', () => {
        navMenuMobile.classList.toggle('hidden');
        navMenuMobile.classList.toggle('flex');
    });
</script><?php /**PATH C:\xampp\htdocs\desa-citali\resources\views/partials/navbar.blade.php ENDPATH**/ ?>