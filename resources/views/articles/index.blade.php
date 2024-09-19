<x-app-layout>
    @foreach ($articles as $article)
    <div class="article">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->content }}</p>
    </div>
@endforeach
</x-app-layout>