<x-layout title="Glory Challenge - À propos">

    {{-- Bandeau avec image fixe --}}
    <section class="relative bg-navy bg-fixed bg-cover bg-center py-20"
        style="background-image: url('https://images.unsplash.com/photo-1758518730384-be3d205838e8?fm=jpg&q=60&w=1600&auto=format&fit=crop')">
        <div class="absolute inset-0 bg-navy/70"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <p class="section-label">À propos</p>
            <h1 class="text-3xl font-medium mt-2 text-white">Découvrez notre histoire et notre engagement</h1>
            <p class="text-gray-300 mt-4 max-w-2xl">
                Glory Challenge est né de la passion pour l'excellence et l'innovation. Notre équipe dédiée
                travaille chaque jour pour offrir des solutions de qualité qui accompagnent nos clients
                dans leur réussite.
            </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-3 gap-12 items-center">
            <div class="md:col-span-2 grid grid-cols-2 gap-8">
                <div
                    class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium text-lg flex items-center gap-2"><span class="text-gold text-xl"><i
                                class="bi bi-bullseye"></i></span> Notre mission</div>
                    <div class="text-base text-gray-500 mt-2">Créer de la valeur durable pour nos clients.</div>
                </div>
                <div
                    class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium text-lg flex items-center gap-2"><span class="text-gold text-xl"><i
                                class="bi bi-eye"></i></span> Notre vision</div>
                    <div class="text-base text-gray-500 mt-2">Devenir une référence en gestion de projets en Afrique.
                    </div>
                </div>
                <div
                    class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium text-lg flex items-center gap-2"><span class="text-gold text-xl"><i
                                class="bi bi-lightbulb"></i></span> Nos valeurs</div>
                    <div class="text-base text-gray-500 mt-2">Intégrité, excellence, innovation.</div>
                </div>
                <div
                    class="border-l-2 border-gold pl-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-l-4">
                    <div class="font-medium text-lg flex items-center gap-2"><span class="text-gold text-xl"><i
                                class="bi bi-hand-thumbs-up"></i></span> Notre engagement</div>
                    <div class="text-base text-gray-500 mt-2">Votre succès à chaque étape de vos projets.</div>
                </div>

            </div>
            <div>
                <img src="{{ asset('images/a-propos.jpg') }}" alt="Notre équipe"
                    class="w-full h-96 object-cover rounded-xl">
            </div>
        </div>
    </section>

</x-layout>
