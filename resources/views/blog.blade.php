<x-layout title="Glory Challenge - Blog">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <p class="section-label">Blog / Actualités</p>
        <h1 class="text-3xl font-medium mt-2">Conseils, tendances et bonnes pratiques</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach ($articles as $article)
                <div class="card transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <span class="text-xs text-gold font-medium">{{ $article->date }}</span>
                    <h2 class="font-medium text-lg mt-2">{{ $article->title }}</h2>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
