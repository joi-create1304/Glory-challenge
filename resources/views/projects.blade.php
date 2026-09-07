<x-layout title="Glory Challenge - Projets">

    <div x-data="{ activeFilter: 'Tous' }">

        {{-- Bandeau avec image fixe + filtres --}}
        <section class="relative bg-navy bg-fixed bg-cover bg-center py-20"
            style="background-image: url('{{ asset('images/project.jpg') }}')">
            <div class="absolute inset-0 bg-navy/70"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-6">
                <p class="section-label">Nos projets</p>
                <h1 class="text-3xl font-medium mt-2 text-white">Des réalisations qui parlent d'elles-mêmes</h1>

                <div class="flex flex-wrap gap-3 mt-6">
                    <button class="filter-button"
                        :class="activeFilter === 'Tous' ? 'bg-gold text-white' : 'bg-white/10 text-white hover:bg-white/20'"
                        x-on:click="activeFilter = 'Tous'">Tous</button>
                    <button class="filter-button"
                        :class="activeFilter === 'Gestion de projet' ? 'bg-gold text-white' :
                            'bg-white/10 text-white hover:bg-white/20'"
                        x-on:click="activeFilter = 'Gestion de projet'">Gestion de projet</button>
                    <button class="filter-button"
                        :class="activeFilter === 'Planification' ? 'bg-gold text-white' :
                            'bg-white/10 text-white hover:bg-white/20'"
                        x-on:click="activeFilter = 'Planification'">Planification</button>
                    <button class="filter-button"
                        :class="activeFilter === 'Conseil' ? 'bg-gold text-white' : 'bg-white/10 text-white hover:bg-white/20'"
                        x-on:click="activeFilter = 'Conseil'">Conseil</button>
                    <button class="filter-button"
                        :class="activeFilter === 'Formation' ? 'bg-gold text-white' : 'bg-white/10 text-white hover:bg-white/20'"
                        x-on:click="activeFilter = 'Formation'">Formation</button>
                </div>
            </div>
        </section>

        {{-- Contenu : grille des cartes --}}
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                    <div class="card transition-all duration-300 hover:-translate-y-1 hover:shadow-lg cursor-pointer"
                        x-show="activeFilter === 'Tous' || activeFilter === '{{ $project->category }}'"
                        x-data="{ open: false }" @click="open = true">
                        <img src="{{ $project->cover_image }}" alt="{{ $project->title }}"
                            class="w-full h-48 object-cover rounded-lg mb-3">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-xs px-2 py-1 rounded-full border {{ $project->status === 'Terminé' ? 'border-green-600 text-green-700' : 'border-gold text-gold' }}">
                                {{ $project->status }}
                            </span>
                            <span class="text-xs text-gray-400">{{ $project->duration }}</span>
                        </div>
                        <h2 class="font-medium text-lg">{{ $project->title }}</h2>
                        <p class="text-sm text-gray-400 mt-1">{{ $project->category }}</p>

                        {{-- Le calque de fond sombre, plein écran --}}
                        <div x-show="open" x-cloak
                            class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-6"
                            @click.stop="open = false">

                            {{-- La boîte blanche, centrée --}}
                            <div @click.stop class="bg-white rounded-xl p-6 max-w-md w-full relative">
                                <button @click="open = false"
                                    class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-xl">×</button>
                                <h3 class="text-xl font-medium">{{ $project->title }}</h3>
                                <p class="text-gray-500 mt-3">{{ $project->description }}</p>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    </div>

</x-layout>
