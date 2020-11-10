
<header>
    <div class="brand">Tweety</div>
    <nav>
        @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit">
                {{ __('Logout') }}
            </button>
        </form>
        @endauth
    </nav>

</header>

