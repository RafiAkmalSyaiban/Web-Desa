<header class="bg-gradient-to-r from-emerald-800 to-teal-500 shadow-sm sticky top-0 z-50">
    <nav class="max-w-6xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-white text-lg">
            <img src="{{ asset('images/logo-citali.png') }}" alt="Logo Desa Citali"
                class="h-9 w-9 rounded-full object-contain bg-white p-0.5">
            {{ config('app.name') }}
        </a>

        <button id="navToggle" class="md:hidden text-white" aria-label="Buka menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <ul id="navMenu" class="hidden md:flex items-center gap-6 text-sm font-medium">
            <li><a href="{{ route('home') }}"
                    class="text-white/90 hover:text-white {{ request()->routeIs('home') ? 'text-white font-semibold' : '' }}">Home</a>
            </li>

            {{-- Dropdown Informasi --}}
            <li class="relative group">
                <button type="button"
                    class="flex items-center gap-1 text-white/90 hover:text-white {{ request()->routeIs('informasi.*') ? 'text-white font-semibold' : '' }}">
                    Informasi
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <ul
                    class="absolute left-0 top-full mt-2 w-56 rounded-xl bg-white shadow-lg py-2 text-gray-700
                           opacity-0 invisible translate-y-1 transition-all duration-150
                           group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                    <li>
                        <a href="{{ route('pengajuan.penerbitan') }}"
                            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('pengajuan.penerbitan') ? 'font-semibold' : '' }}">
                            Pengajuan Penerbitan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pengajuan.admininduk') }}"
                            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('pengajuan.admininduk') ? 'font-semibold' : '' }}">
                            Pengajuan AdminInduk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pengajuan.kk') }}"
                            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('pengajuan.kk') ? 'font-semibold' : '' }}">
                            Pengajuan KK
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pengajuan.jalur') }}"
                            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('pengajuan.jalur') ? 'font-semibold' : '' }}">
                            Jalur Pengajuan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pengajuan.formulir') }}"
                            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('pengajuan.formulir') ? 'font-semibold' : '' }}">
                            Formulir
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galeri') }}"
                            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('galeri') ? 'font-semibold' : '' }}">
                            Galeri
                        </a>
                    </li>
                </ul>
            </li>

            <li><a href="{{ route('berita.index') }}"
                    class="text-white/90 hover:text-white {{ request()->routeIs('berita.*') ? 'text-white font-semibold' : '' }}">Berita</a>
            </li>
            <li><a href="{{ route('struktur') }}"
                    class="text-white/90 hover:text-white {{ request()->routeIs('struktur') ? 'text-white font-semibold' : '' }}">Struktur
                    Organisasi</a></li>
            <li><a href="{{ route('galeri') }}"
                    class="text-white/90 hover:text-white {{ request()->routeIs('galeri') ? 'text-white font-semibold' : '' }}">Galeri</a>
            </li>
            <li><a href="{{ route('peta') }}"
                    class="text-white/90 hover:text-white {{ request()->routeIs('peta') ? 'text-white font-semibold' : '' }}">Peta
                    Desa</a></li>
            <li><a href="{{ route('tentang') }}"
                    class="px-4 py-2 rounded-full bg-white text-primary-700 hover:bg-primary-50 {{ request()->routeIs('tentang') ? 'ring-2 ring-white/60' : '' }}">Tentang
                    Desa</a></li>
        </ul>
    </nav>

    <ul id="navMenuMobile"
        class="hidden md:hidden flex-col gap-1 px-4 pb-4 text-sm font-medium bg-gradient-to-r from-emerald-800 to-teal-500">
        <li><a href="{{ route('home') }}" class="block py-2 text-white/90 hover:text-white">Home</a></li>

        {{-- Dropdown Informasi (mobile) --}}
        <li>
            <button type="button" id="infoToggleMobile"
                class="w-full flex items-center justify-between py-2 text-white/90 hover:text-white">
                Informasi
                <svg id="infoChevronMobile" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="infoSubmenuMobile" class="hidden flex-col gap-1 pl-4 border-l border-white/20">
                <li><a href="{{ route('pengajuan.penerbitan') }}"
                        class="block py-1.5 text-white/80 hover:text-white">Pengajuan Penerbitan</a></li>
                <li><a href="{{ route('pengajuan.admininduk') }}"
                        class="block py-1.5 text-white/80 hover:text-white">Pengajuan Adminduk</a></li>
                <li><a href="{{ route('pengajuan.kk') }}" class="block py-1.5 text-white/80 hover:text-white">Pengajuan
                        KK</a></li>
                <li><a href="{{ route('pengajuan.jalur') }}" class="block py-1.5 text-white/80 hover:text-white">Jalur
                        Pengajuan</a></li>
                <li><a href="{{ route('pengajuan.formulir') }}"
                        class="block py-1.5 text-white/80 hover:text-white">Formulir</a></li>
                <li><a href="{{ route('galeri') }}" class="block py-1.5 text-white/80 hover:text-white">Galeri</a></li>
            </ul>
        </li>

        <li><a href="{{ route('berita.index') }}" class="block py-2 text-white/90 hover:text-white">Berita</a></li>
        <li><a href="{{ route('struktur') }}" class="block py-2 text-white/90 hover:text-white">Struktur Organisasi</a>
        </li>
        <li><a href="{{ route('galeri') }}" class="block py-2 text-white/90 hover:text-white">Galeri</a></li>
        <li><a href="{{ route('peta') }}" class="block py-2 text-white/90 hover:text-white">Peta Desa</a></li>
        <li><a href="{{ route('tentang') }}" class="block py-2 font-semibold text-white">Tentang Desa</a></li>
    </ul>
</header>

<script>
    const navToggle = document.getElementById('navToggle');
    const navMenuMobile = document.getElementById('navMenuMobile');
    navToggle?.addEventListener('click', () => {
        navMenuMobile.classList.toggle('hidden');
        navMenuMobile.classList.toggle('flex');
    });

    const infoToggleMobile = document.getElementById('infoToggleMobile');
    const infoSubmenuMobile = document.getElementById('infoSubmenuMobile');
    const infoChevronMobile = document.getElementById('infoChevronMobile');
    infoToggleMobile?.addEventListener('click', () => {
        infoSubmenuMobile.classList.toggle('hidden');
        infoSubmenuMobile.classList.toggle('flex');
        infoChevronMobile.classList.toggle('rotate-180');
    });
</script>
