<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('posts.index') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="text-gray-600">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-gray-600">Register</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
