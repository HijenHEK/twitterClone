<nav id="menu" class="t-nav f fc ast ">

    <div class="nav-links f fc js mb1">
        <a href="#">Home</a>
        <a href="#">Explore</a>
        <a href="#">Notification</a>
        <a href="#">Messages</a>
        <a href="#">Bookmarks</a>
        <a href="#">Lists</a>
        <a href="#">Profile</a>
        <a href="#">More</a>

    @auth



    <button class="btn btn-tweet">Tweet a post</button>


            <form class="f ac" method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="nav-link" type="submit">
                   Logout
                </a>
            </form>

    </div>

    @endauth
</nav>
