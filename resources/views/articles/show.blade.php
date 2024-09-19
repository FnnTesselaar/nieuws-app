<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->title }}
        </h2>
    </x-slot>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">{{ $article->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ $article->description }}</p>
                    <div class="mb-4">
                        <strong>Category:</strong> {{ $article->category->title ?? 'No Category' }}
                    </div>
                    <div class="mb-4">
                        <strong>Tags:</strong>
                        @forelse ($article->tags as $tag)
                            <span class="inline-block bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded-md">{{ $tag->title }}</span>
                        @empty
                            <span class="text-gray-500">No Tags</span>
                        @endforelse
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold">Comments</h3>
                        @forelse ($article->comments as $comment)
                            <div class="mt-2 p-4 bg-gray-100 rounded-md shadow-sm">
                                <h5 class="font-semibold">{{ $comment->title }}</h5>
                                <p class="text-gray-600">{{ $comment->description }}</p>
                            </div>
                        @empty
                            <p class="text-gray-500">No comments yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
