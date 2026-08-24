<x-layout title="Glory Challenge - Accueil">

    {{-- Hero --}}
    <section class="bg-navy">
        <div class="max-w-7xl mx-auto px-6 pt-16 pb-10">
            <p class="section-label">Gestion de projets · Conseil · Performance</p>

            <h1 class="text-white text-4xl md:text-5xl font-medium leading-tight mt-3 max-w-2xl">
                Nous transformons vos idées en projets <span class="text-gold">à fort impact.</span>
            </h1>

            <p class="text-gray-300 mt-5 max-w-xl leading-relaxed">
                Glory Challenge accompagne les entreprises et organisations dans la planification,
                l'exécution et le suivi de projets performants et durables.
            </p>

            <div class="flex flex-wrap gap-4 mt-8">
                <a href="{{ route('services') }}" class="btn-primary">
                    Découvrir nos services →
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary">
                    Parler à un expert
                </a>
            </div>
        </div>

        {{-- Stats --}}
        <div class="border-t border-white/10 grid grid-cols-2 md:grid-cols-4 divide-x divide-white/10">
            @foreach ([['50+', 'Projets réalisés'], ['98%', 'Taux de satisfaction'], ['15+', "Secteurs d'activité"], ['100%', 'Engagement qualité']] as [$number, $label])
                <div class="text-center py-6">
                    <div class="text-gold text-2xl font-medium">{{ $number }}</div>
                    <div class="text-gray-400 text-xs mt-1">{{ $label }}</div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 -mt-4 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([['Approche stratégique', 'Des solutions alignées sur vos objectifs.'], ['Méthodologie rigoureuse', 'Une approche structurée pour garantir le succès de vos projets.'], ['Expertise sectorielle', 'Une connaissance approfondie de votre domaine d\'activité.'], ['Engagement client', 'Un accompagnement personnalisé tout au long du processus.']] as [$title, $description])
                <div class="card text-center">
                    <div class="font-medium text-sm">{{ $title }}</div>
                    <div class="text-xs text-gray-500 mt-1">{{ $description }}</div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
