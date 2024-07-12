<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover mb-6">
            @endif
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
            <p class="text-gray-700">{{ $post->body }}</p>
            <div class="flex justify-end mt-6">
                <a href="{{ route('posts.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>