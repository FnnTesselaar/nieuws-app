<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center">
            {{ __('Tags Pagina') }}
        </h2>
    </x-slot>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6">
                <!-- Link voor het aanmaken van tags -->
                <div class="flex justify-end mb-4">
                    <a href="{{ route('tags.create') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        Tags Create
                    </a>
                </div>

                <!-- Tags -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @foreach ($tags as $tag)
                            <div class="bg-white p-6 mb-4 rounded-lg shadow">
                                <h2 class="text-2xl font-bold text-gray-800">{{ $tag->title }}</h2>
                                <p class="text-gray-700 mt-2 mb-4">{{ $tag->description }}</p>
                                <div class="flex space-x-4">
                                    <a href="{{ route('tags.edit', $tag) }}"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-600 hover:text-blue-900 focus:outline-none focus:border-blue-700 focus:ring-blue active:text-blue-700 transition ease-in-out duration-150">
                                        Edit
                                    </a>
                                    <form action="{{ route('tags.destroy', $tag) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this tag?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-red-600 hover:text-red-900 focus:outline-none focus:border-red-700 focus:ring-red active:text-red-700 transition ease-in-out duration-150">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        @if($tags->isEmpty())
                            <p class="text-gray-500">No tags available.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
