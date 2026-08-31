<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Glory Challenge' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-800 antialiased min-h-screen flex flex-col">

    @include('partials.navbar')

    <div class="flex flex-1">
        <main class="flex-1">
            {{ $slot }}
        </main>

        @isset($sidebar)
            <aside class="w-72 shrink-0">
                {{ $sidebar }}
            </aside>
        @endisset
    </div>

    @include('partials.footer')

</body>

</html>
