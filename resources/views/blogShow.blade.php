<x-layout title="{{ $article->title }} - Glory Challenge">
    <div class="max-w-4xl mx-auto px-6 py-16">

        <a href="{{ route('blog') }}" class="text-sm text-gold hover:underline">← Retour au blog</a>

        <img src="{{ $article->cover_image }}" alt="{{ $article->title }}"
            class="w-full h-72 object-cover rounded-xl mt-6">

        <span class="text-xs text-gold font-medium block mt-6">{{ $article->published_at->format('d F Y') }}</span>
        <h1 class="text-3xl font-medium mt-2">{{ $article->title }}</h1>

        <div class="text-gray-600 leading-relaxed mt-8 space-y-4">
            @foreach (explode("\n\n", $article->content) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

    </div>
</x-layout>
