<nav class="t-nav f fc ast ">

    <div class="nav-links f fc js mb1">
        <a href="#">Home</a>
        <a href="#">Explore</a>
        <a href="#">Notification</a>
        <a href="#">Messages</a>
        <a href="#">Bookmarks</a>
        <a href="#">Lists</a>
        <a href="#">Profile</a>
        <a href="#">More</a>
    </div>

    <button class="btn btn-tweet">Tweet a post</button>

    @auth

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="btn btn-logout" type="submit">
            {{ __('Logout') }}
        </button>
    </form>

    @endauth
</nav>
