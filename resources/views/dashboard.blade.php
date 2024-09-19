<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center">
            {{ __('Nieuws Pagina') }}
        </h2>
    </x-slot>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6">
                <!-- Links voor het aanmaken van artikelen en tags -->
                <div class="flex space-x-4 mb-4">
                    <a href="{{ route('articles.create') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        Article Create
                    </a>
                </div>

                <!-- Artikelen -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @foreach ($articles as $article)
                            <h2 class="text-xl font-semibold text-gray-800 mt-6">Article</h2>
                            <div class="bg-white p-4 mb-4 rounded-lg shadow">
                                <div class="mt-4">
                                   category: {{ $article->category->title ?? 'No Category' }}
                                </div>
                                <h2 class="text-2xl font-bold mb-2">{{ $article->title }}</h2>
                                <p class="text-gray-700">{{ $article->description }}</p>
                                <a href="{{ route('articles.show', $article) }}"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-green-600 hover:text-green-900">
                                    View Details
                                </a>

                                <!-- Display Tags -->
                                <div class="mt-4">
                                    @forelse ($article->tags as $tag)
                                        <span
                                            class="inline-block bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded-md">{{ $tag->title }}</span>
                                    @empty
                                        <span class="text-gray-500">No Tags</span>
                                    @endforelse
                                </div>

                                <button onclick="toggleCommentForm({{ $article->id }})"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-indigo-600 hover:text-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:text-indigo-700 transition ease-in-out duration-150">
                                    Comment
                                </button> <br>
                                <a href="{{ route('articles.edit', $article) }}"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-600 hover:text-blue-900">
                                    Edit
                                </a>
                                <form action="{{ route('articles.destroy', $article) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-red-600 hover:text-red-900">
                                        Delete
                                    </button>
                                </form>
                                <div id="commentForm{{ $article->id }}" class="hidden mt-4">
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <form action="{{ route('comments.store', $article) }}" method="POST">
                                            @csrf
                                            <div class="mb-4">
                                                <label for="title"
                                                    class="block text-sm font-medium text-gray-700">Title</label>
                                                <input type="text" id="title" name="title"
                                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            </div>
                                            <div class="mb-4">
                                                <label for="description"
                                                    class="block text-sm font-medium text-gray-700">Content</label>
                                                <textarea id="description" name="description" rows="5"
                                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                                            </div>
                                            <button type="submit"
                                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                Create Comment
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="comments{{ $article->id }}" class="hidden">
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800 mt-6">Comments</h2>
                            @forelse ($article->comments as $comment)
                                <div class="mt-2 p-4 bg-gray-100 rounded-md shadow-sm">
                                    <h5 class="font-semibold">{{ $comment->title }}</h5>
                                    <p class="text-gray-600">{{ $comment->description }}</p>
                                    <div class="flex space-x-4">
                                        <button onclick="toggleEditCommentForm({{ $comment->id }})"
                                            class="text-blue-600 hover:text-blue-900">
                                            Edit
                                        </button>
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </div>
                                    <div id="editCommentForm{{ $comment->id }}" class="hidden mt-4">
                                        <div class="bg-white p-6 rounded-lg shadow-md">
                                            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-4">
                                                    <label for="editTitle{{ $comment->id }}"
                                                        class="block text-sm font-medium text-gray-700">Title</label>
                                                    <input type="text" id="editTitle{{ $comment->id }}"
                                                        name="title" value="{{ $comment->title }}"
                                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="editDescription{{ $comment->id }}"
                                                        class="block text-sm font-medium text-gray-700">Content</label>
                                                    <textarea id="editDescription{{ $comment->id }}" name="description" rows="5"
                                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $comment->description }}</textarea>
                                                </div>
                                                <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                    Update Comment
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-500">No comments yet.</p>
                            @endforelse
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleCommentForm(articleId) {
            const commentForm = document.getElementById(`commentForm${articleId}`);
            commentForm.classList.toggle('hidden');
        }

        function toggleEditCommentForm(commentId) {
            const editCommentForm = document.getElementById(`editCommentForm${commentId}`);
            editCommentForm.classList.toggle('hidden');
        }
    </script>
</x-app-layout>
