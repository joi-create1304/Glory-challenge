<x-layout title="Glory Challenge - Services">
    <section class="max-w-7xl mx-auto px-6 py-16">
        <p class="section-label">Nos services</p>
        <h1 class="text-3xl font-medium mt-2">Des solutions sur mesure pour chaque étape de vos projets</h1>

        <div class="grid md:grid-cols-2 gap-5 mt-10">
            @foreach ($services as $service)
                <div class="card p-6">
                    <div class="text-2xl">{{ $service->icon }}</div>
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
