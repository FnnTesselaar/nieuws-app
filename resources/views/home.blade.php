<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">

    <nav class="bg-blue-900 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-white text-2xl font-bold" href="#">NOVA Nieuws</a>
            @if (Route::has('login'))
                <div class="flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300">nieuws</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white hover:text-gray-300">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white hover:text-gray-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <main>
        <div class="container mx-auto mt-5">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-4xl font-bold mb-4">Welcome to our News Site</h1>
                <p class="text-lg">Stay up-to-date with the latest news and headlines.</p>
            </div>
        </div>
        <div class="container mx-auto mt-5">
            <h1 class="text-3xl font-semibold mb-4">News Articles</h1>
            @foreach ($articles as $article)
                <div class="bg-white p-4 mb-4 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-2">{{ $article->title }}</h2>
                    <p class="text-gray-700">{{ $article->description }}</p>
                    <a href="{{ route('articles.show', $article) }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-green-600 hover:text-green-900">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>
    </main>

</body>

</html>
