<header class="bg-navy sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-gold flex items-center justify-center text-navy font-semibold text-sm">GC
            </div>
            <div>
                <div class="text-white text-sm font-medium leading-tight">Glory Challenge</div>
                <div class="text-gray-400 text-[10px] leading-tight">Planifier. Piloter. Réussir.</div>
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-7 text-sm text-gray-200">
            <a href="{{ route('home') }}"
                class="relative text-gray-200 hover:text-gold transition after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-gold after:transition-all after:duration-300 hover:after:w-full">
                Accueil
            </a>
            <a href="{{ route('about') }}"
                class="relative text-gray-200 hover:text-gold transition after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-gold after:transition-all after:duration-300 hover:after:w-full">
                À propos
            </a>
            <a href="{{ route('services') }}"
                class="relative text-gray-200 hover:text-gold transition after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-gold after:transition-all after:duration-300 hover:after:w-full">
                Services
            </a>
            <a href="{{ route('projects') }}"
                class="relative text-gray-200 hover:text-gold transition after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-gold after:transition-all after:duration-300 hover:after:w-full">
                Projets
            </a>
            <a href="{{ route('blog') }}"
                class="relative text-gray-200 hover:text-gold transition after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-gold after:transition-all after:duration-300 hover:after:w-full">
                Blog
            </a>
            <a href="{{ route('contact') }}"
                class="relative text-gray-200 hover:text-gold transition after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-gold after:transition-all after:duration-300 hover:after:w-full">
                Contact
            </a>
        </nav>

        <a href="{{ route('contact') }}" class="hidden md:inline-flex bg-gold text-navy text-sm font-medium px-5 py-2.5 rounded-md hover:bg-gold/90 transition">
            Nous contacter
        </a>

        <button @click="mobileOpen = !mobileOpen" class="md:hidden text-white text-2xl">
            ☰
        </button>
    </div>

    <nav x-show="mobileOpen" x-cloak class="md:hidden flex flex-col gap-4 px-6 pb-6 text-gray-200 text-sm">
        <a href="{{ route('home') }}" class="hover:text-gold transition">Accueil</a>
        <a href="{{ route('about') }}" class="hover:text-gold transition">À propos</a>
        <a href="{{ route('services') }}" class="hover:text-gold transition">Services</a>
        <a href="{{ route('projects') }}" class="hover:text-gold transition">Projets</a>
        <a href="{{ route('blog') }}" class="hover:text-gold transition">Blog</a>
        <a href="{{ route('contact') }}" class="hover:text-gold transition">Contact</a>
    </nav>
</header>
