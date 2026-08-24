<x-layout title="Glory Challenge - Projets">
    <div class="max-w-7xl mx-auto px-6 py-16" x-data="{ activeFilter: 'Tous' }">
        <p class="section-label">Nos projets</p>
        <h1 class="text-3xl font-medium mt-2">Des réalisations qui parlent d'elles-mêmes</h1>

        <div class="flex flex-wrap gap-3 mt-6">
            <button class="filter-button"
                :class="activeFilter === 'Tous' ? 'bg-gold text-white' : 'bg-gray-200 text-gray-700'"
                x-on:click="activeFilter = 'Tous'">Tous</button>
            <button class="filter-button"
                :class="activeFilter === 'Bâtiment' ? 'bg-gold text-white' : 'bg-gray-200 text-gray-700'"
                x-on:click="activeFilter = 'Bâtiment'">Bâtiment</button>
            <button class="filter-button"
                :class="activeFilter === 'Énergie' ? 'bg-gold text-white' : 'bg-gray-200 text-gray-700'"
                x-on:click="activeFilter = 'Énergie'">Énergie</button>
            <button class="filter-button"
                :class="activeFilter === 'IT & digital' ? 'bg-gold text-white' : 'bg-gray-200 text-gray-700'"
                x-on:click="activeFilter = 'IT & digital'">IT & digital</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach ($projects as $project)
                <div class="card transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    x-show="activeFilter === 'Tous' || activeFilter === '{{ $project->category }}'">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-xs px-2 py-1 rounded-full {{ $project->status === 'Terminé' ? 'bg-green-100 text-green-700' : 'bg-gold-light text-gold' }}">
                            {{ $project->status }}
                        </span>
                        <span class="text-xs text-gray-400">{{ $project->duration }}</span>
                    </div>
                    <h2 class="font-medium text-lg">{{ $project->title }}</h2>
                    <p class="text-sm text-gray-400 mt-1">{{ $project->category }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
