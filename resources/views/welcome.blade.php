<x-app-layout>
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">

        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-lg rounded-lg overflow-hidden">
            <!-- Background Image -->
            <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black opacity-40"></div>

            <!-- Content -->
            <div class="relative z-10 p-6">
                <h1 class="text-4xl font-bold mb-4">Welcome to Your Blog</h1>
                <p class="text-lg text-gray-200 leading-relaxed text-left">Discover a world of amazing content and profound insights that ignite your imagination and fuel your passions, guiding you on a journey of discovery and growth.</p>
                <div class="mt-6">
                    <a href="#" class="bg-white text-gray-800 py-2 px-6 rounded-full font-semibold hover:bg-gray-200 transition duration-300">Explore Now</a>
                </div>
            </div>
        </div>

        <!-- Featured Posts -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            <!-- Post 1 -->

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/post1.jpg') }}" alt="Post 1 Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Exploring the Beauty of Nature</h2>
                    <p class="text-gray-600 leading-relaxed">Experience the wonders of nature through breathtaking landscapes and serene environments.</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>
            </div>
            <!-- Post 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/post2.jpg') }}" alt="Post 2 Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">The Art of Culinary Delights</h2>
                    <p class="text-gray-600 leading-relaxed">Explore culinary arts from around the world with delectable recipes and cooking techniques.</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/post3.jpg') }}" alt="Post 3 Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Mastering the Art of Photography</h2>
                    <p class="text-gray-600 leading-relaxed">Learn photography tips and techniques to capture stunning moments and tell compelling stories through images.</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
