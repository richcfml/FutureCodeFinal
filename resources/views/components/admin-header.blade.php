<header>
    <div class="wrap">
        <nav>
            <a href="{{ route('admin.index') }}" class="logo">
                <span class="mark">FC</span>
                Future Code
            </a>
            <div class="navlinks">
                @guest
                    <a href="{{ route('register.create') }}" class="btn btn-primary">Register</a>
                @endguest
                @auth
                        <a href="#">Projects</a>
                        <form method="POST" action="{{ route('admin.destroy') }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary" type="submit">
                                <i class="fa-light fa-bookmark-plus"></i> Logout
                            </button>
                        </form>
                @endauth

            </div>
        </nav>
    </div>
</header>
