<x-layout title="Glory Challenge - Accueil">

    <section class="relative bg-navy bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1776914579657-3396d13eb13e?fm=jpg&q=80&w=1600&auto=format&fit=crop')">

        <div class="absolute inset-0 bg-navy/80"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 pt-16 pb-10">
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
                    Nous contacter
                </a>
            </div>

            {{-- Badges du Hero --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-10 pt-6 border-t border-white/10">

                <div>
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-gold text-lg">
                        <i class="bi bi-folder"></i>
                    </div>
                    <div class="text-white text-sm font-medium mt-1">
                        Gestion de projets
                    </div>
                    <div class="text-gray-400 text-xs">
                        Efficacité et performance
                    </div>
                </div>

                <div>
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-gold text-lg">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="text-white text-sm font-medium mt-1">
                        Planification stratégique
                    </div>
                    <div class="text-gray-400 text-xs">
                        Vision et résultats
                    </div>
                </div>

                <div>
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-gold text-lg">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="text-white text-sm font-medium mt-1">
                        Conseil et accompagnement
                    </div>
                    <div class="text-gray-400 text-xs">
                        Expertise à votre service
                    </div>
                </div>

                <div>
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-gold text-lg">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <div class="text-white text-sm font-medium mt-1">
                        Formation professionnelle
                    </div>
                    <div class="text-gray-400 text-xs">
                        Montée en compétences
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 -mt-4 relative z-10">


        <div class="text-center mb-10">
            <h2 class="text-2xl font-medium">Pourquoi choisir <span class="text-gold">GLORY CHALLENGE</span> ?</h2>
            <p class="text-gray-500 mt-2">Une expertise solide, une approche méthodique et des résultats concrets.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([['Objectifs clairs', 'Des stratégies alignées sur vos ambitions.'], ['Méthodes éprouvées', 'Des processus performants et fiables.'], ['Équipe expérimentée', 'Des experts passionnés à votre service.'], ['Résultats mesurables', 'Une croissance durable et une meilleure productivité.']] as [$title, $description])
                <div class="card text-center">
                    <div class="font-medium text-sm">{{ $title }}</div>
                    <div class="text-xs text-gray-500 mt-1">{{ $description }}</div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-10">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-medium">Nos domaines <span class="text-gold">d'intervention</span></h2>
            <p class="text-gray-500 mt-2">Des solutions complètes pour tous vos défis.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([['Gestion de projets', 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?fm=jpg&q=80&w=800&auto=format&fit=crop'], ['Planification stratégique', 'https://images.unsplash.com/photo-1758873269035-aae0e1fd3422?fm=jpg&q=80&w=800&auto=format&fit=crop'], ['Conseil & accompagnement', 'https://images.unsplash.com/photo-1638262052640-82e94d64664a?fm=jpg&q=80&w=800&auto=format&fit=crop'], ['Formation professionnelle', 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?fm=jpg&q=80&w=800&auto=format&fit=crop']] as [$domain, $image])
                <a href="{{ route('services') }}"
                    class="relative rounded-xl overflow-hidden h-48 group cursor-pointer block">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110"
                        style="background-image: url('{{ $image }}')"></div>
                    <div class="absolute inset-0 bg-navy/60"></div>
                    <div class="absolute inset-0 flex items-end p-4">
                        <span class="text-white font-medium text-sm">{{ $domain }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <section class="bg-navy">
        <div class="border-t border-white/10 grid grid-cols-2 md:grid-cols-4 divide-x divide-white/10">
            @foreach ([['50+', 'Projets réalisés'], ['98%', 'Taux de satisfaction'], ['15+', "Secteurs d'activité"], ['100%', 'Engagement qualité']] as [$number, $label])
                <div class="text-center py-6">
                    <div class="text-gold text-2xl font-medium">{{ $number }}</div>
                    <div class="text-gray-400 text-xs mt-1">{{ $label }}</div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
