<x-layout title="Glory Challenge - À propos">
    <section class="max-w-7xl mx-auto px-6 py-16">
        <p class="section-label">À propos</p>
        <h1 class="text-3xl font-medium mt-2">Découvrez notre histoire et notre engagement</h1>
        <p class="text-gray-400 mt-4 max-w-2xl">
            Glory Challenge est né de la passion pour l'excellence et l'innovation. Notre équipe dédiée
            travaille chaque jour pour offrir des solutions de qualité qui accompagnent nos clients
            dans leur réussite.
        </p>
        <div class="grid md:grid-cols-2 gap-12 items-center mt-8">
            <div class="grid grid-cols-2 gap-6">
                <div class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium flex items-center gap-2"><span class="text-gold">🎯</span> Notre mission</div>
                    <div class="text-sm text-gray-500 mt-1">Créer de la valeur durable pour nos clients.</div>
                </div>
                <div class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium flex items-center gap-2"><span class="text-gold">👁️</span> Notre vision</div>
                    <div class="text-sm text-gray-500 mt-1">Devenir une référence en gestion de projets en Afrique.</div>
                </div>
                <div class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium flex items-center gap-2"><span class="text-gold">💡</span> Nos valeurs</div>
                    <div class="text-sm text-gray-500 mt-1">Intégrité, excellence, innovation.</div>
                </div>
                <div class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium flex items-center gap-2"><span class="text-gold">🤝</span> Notre engagement</div>
                    <div class="text-sm text-gray-500 mt-1">Votre succès à chaque étape de vos projets.</div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/a-propos.jpg') }}" alt="Notre équipe" class="w-full h-96 object-cover rounded-xl">
            </div>
        </div>
    </section>
</x-layout>