<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ isset($post) ? 'Edit' : 'Create' }} Post</h1>
            <form action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                    @method('PUT')
                @endif
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('title', $post->title ?? '') }}">
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="block text-gray-700">Body</label>
                    <textarea name="body" id="body" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('body', $post->body ?? '') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ isset($post) ? 'Update' : 'Create' }}</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
