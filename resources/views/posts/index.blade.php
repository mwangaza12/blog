<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Posts</h1>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Post</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                @endif
                <div class="p-6">
                    <a href="{{ route('posts.show', $post) }}" class="text-lg font-semibold text-blue-600">{{ $post->title }}</a>
                    <p class="text-gray-600">{{ Str::limit($post->body, 100) }}</p>
                    <p class="text-gray-500 text-sm mt-2">Posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>
                    <div class="flex space-x-2 mt-4">
                        @if(auth()->check() && auth()->user()->id === $post->user_id)
                            <a href="{{ route('posts.edit', $post) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
