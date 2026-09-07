<x-layout title="Glory Challenge - Blog">

    {{-- Bandeau avec image fixe --}}
    <section class="relative bg-navy bg-fixed bg-cover bg-center py-20"
        style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?fm=jpg&q=60&w=1600&auto=format&fit=crop')">
        <div class="absolute inset-0 bg-navy/70"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <p class="section-label">Blog / Actualités</p>
            <h1 class="text-3xl font-medium mt-2 text-white">Conseils, tendances et bonnes pratiques</h1>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <a href="{{ route('blog.show', $article) }}"
                    class="card p-0 overflow-hidden block transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <img src="{{ $article->cover_image }}" alt="{{ $article->title }}" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <span class="text-xs text-gold font-medium">{{ $article->published_at->format('d M') }}</span>
                        <h2 class="font-medium text-lg mt-2">{{ $article->title }}</h2>
                        <p class="text-sm text-gray-400 mt-2">{{ $article->excerpt }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</x-layout>
