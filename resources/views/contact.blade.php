<x-layout title="Glory Challenge - Contact">

    {{-- Bandeau avec image fixe --}}
    <section class="relative bg-navy bg-fixed bg-cover bg-center py-20"
        style="background-image: url('https://images.unsplash.com/photo-1758518730384-be3d205838e8?fm=jpg&q=60&w=1600&auto=format&fit=crop')">
        <div class="absolute inset-0 bg-navy/70"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <p class="section-label">Contactez-nous</p>
            <h1 class="text-3xl font-medium mt-2 text-white">Parlons de votre prochain projet</h1>
            <p class="text-gray-300 mt-4">Notre équipe est à l'écoute et vous propose les meilleures solutions.</p>
        </div>
    </section>

    {{-- Contenu principal : grille à 2 colonnes --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-12">

            <div>
                <div class="flex items-start gap-3 mb-4">
                    <i class="bi bi-geo-alt text-gold text-lg"></i>
                    <div>
                        <div class="font-medium text-sm">Adresse</div>
                        <div class="text-gray-500 text-sm">Cotonou, Bénin</div>
                    </div>
                </div>
                <div class="flex items-start gap-3 mb-4">
                    <i class="bi bi-telephone text-gold text-lg"></i>
                    <div>
                        <div class="font-medium text-sm">Téléphone</div>
                        <div class="text-gray-500 text-sm">+229 01 56 56 09 83</div>
                    </div>
                </div>
                <div class="flex items-start gap-3 mb-4">
                    <i class="bi bi-envelope text-gold text-lg"></i>
                    <div>
                        <div class="font-medium text-sm">Email</div>
                        <div class="text-gray-500 text-sm">contact@glorychallenge.com</div>
                    </div>
                </div>
            </div>

            {{-- Colonne droite : le formulaire --}}
            <div class="card">
                @if (session('success'))
                    <div class="bg-green-50 text-green-700 text-sm px-4 py-3 rounded-md mb-4">
                        Votre message a bien été envoyé, merci !
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                    @csrf

                    <div>
                        <input type="text" name="name" placeholder="Nom complet" value="{{ old('name') }}"
                            class="border border-gray-300 rounded-md px-3 py-2 text-sm w-full">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                            class="border border-gray-300 rounded-md px-3 py-2 text-sm w-full">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">Type de demande</label>
                        <select name="request_type" class="border border-gray-300 rounded-md px-3 py-2 text-sm w-full">
                            <option value="">Type de demande</option>
                            <option value="Suivie de projet">Suivie de projet</option>
                            <option value="Audit">Audit</option>
                            <option value="Gestion de projet">Gestion de projet</option>
                            <option value="Autre">Autre</option>
                        </select>
                        @error('request_type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <textarea name="message" rows="5" placeholder="Votre message"
                            class="border border-gray-300 rounded-md px-3 py-2 text-sm w-full">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full justify-center">
                        Envoyer le message
                    </button>
                </form>
            </div>

        </div>
    </div>

</x-layout>
