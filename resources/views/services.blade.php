<x-layout title="Glory Challenge - Services">

    {{-- Bandeau avec image fixe --}}
    <section class="relative bg-navy bg-fixed bg-cover bg-center py-20"
        style="background-image: url('https://images.unsplash.com/photo-1758518730384-be3d205838e8?fm=jpg&q=60&w=1600&auto=format&fit=crop')">
        <div class="absolute inset-0 bg-navy/70"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <p class="section-label">Nos services</p>
            <h1 class="text-3xl font-medium mt-2 text-white">Des solutions sur mesure pour chaque étape de vos projets
            </h1>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-5">
            @foreach ($services as $service)
                <div class="card p-6">
                    <div class="text-2xl text-gold"><i class="bi bi-{{ $service->icon }}"></i></div>
                    <h2 class="text-xl font-medium mt-2">{{ $service->title }}</h2>
                    <p class="text-gray-400 mt-3">{{ $service->description }}</p>
                    <ul class="text-sm text-gray-500 mt-3 space-y-1">
                        @foreach ($service->points as $point)
                            <li>• {{ $point }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

</x-layout>
