<header>
    <div class="wrap">
        <nav>
            <a href="{{ route('admin.index') }}" class="logo">
                <span class="mark">FC</span>
                Future Code
            </a>
            @if(auth()->user())
                <div class="navlinks">
                    <a href="#">Projects</a>
                    <form method="POST" action="{{ route('admin.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">
                            <i class="fa-light fa-bookmark-plus"></i> Logout
                        </button>
                    </form>

                </div>
            @endif
        </nav>
    </div>
</header>
