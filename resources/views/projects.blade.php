<x-layout title="Glory Challenge - Projets">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <p class="section-label">Nos projets</p>
        <h1 class="text-3xl font-medium mt-2">Des réalisations qui parlent d'elles-mêmes</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach ($projects as $project)
                <div class="card transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs px-2 py-1 rounded-full {{ $project->status === 'Terminé' ? 'bg-green-100 text-green-700' : 'bg-gold-light text-gold' }}">
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
