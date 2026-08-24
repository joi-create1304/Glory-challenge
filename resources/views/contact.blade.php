<x-layout title="Glory Challenge - Contact">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <p class="section-label">Contactez-nous</p>
                <h1 class="text-3xl font-medium mt-2">Parlons de votre prochain projet</h1>
                <p class="text-gray-500 mt-4">Notre équipe est à l'écoute et vous propose les meilleures solutions.</p>
            </div>

            <div class="card">

                {{-- Affiché uniquement si back()->with('success', true) a été déclenché --}}
                @if (session('success'))
                    <div class="bg-green-50 text-green-700 text-sm px-4 py-3 rounded-md mb-4">
                        Votre message a bien été envoyé, merci !
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                    {{-- @csrf est OBLIGATOIRE sur tout formulaire Laravel qui fait un POST.
                         Ça génère un jeton de sécurité invisible qui prouve que le formulaire
                         vient bien de ton site, et pas d'un site pirate qui l'imiterait. --}}
                    @csrf

                    <div>
                        <input type="text" name="name" placeholder="Nom complet" value="{{ old('name') }}"
                            class="border border-gray-300 rounded-md px-3 py-2 text-sm w-full">
                        {{-- old('name') redonne à l'utilisateur ce qu'il avait tapé,
                             s'il y a eu une erreur de validation ailleurs dans le formulaire.
                             Sans ça, il devrait tout retaper depuis zéro à chaque erreur. --}}

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
