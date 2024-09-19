<!-- Navigatiebalk -->
<nav class="bg-blue-900 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-white text-2xl font-bold" href="{{ route('home') }}">NOVA Nieuws</a>
        <div class="flex items-center space-x-4">
            <a href="{{ route('dashboard') }}" class="text-white">Nieuws</a>
            <a href="{{ route('profile.edit') }}" class="text-white">Profile</a>
            @guest
                <a href="{{ route('login') }}" class="text-white">Login</a>
                <a href="{{ route('register') }}" class="text-white">Register</a>
            @else
                 <a href="{{ route('categories.index') }}" class="text-white">categories</a>
                 <a href="{{ route('tags.index') }}" class="text-white">tags</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-white">Logout</button>
                </form>

            @endguest
        </div>
    </div>
</nav>
