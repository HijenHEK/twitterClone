<nav id="menu" class="t-nav f fc ast ">

    <div class="nav-links f fc js mb1">
        <a class="nav-link" href="/tweets">Home</a>
        <a class="nav-link" href="/explore">Explore</a>

        <a class="nav-link" href="/users/{{Auth::user()->uname}}">Profile</a>

        @auth

         <form class="f ac" method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="nav-link logout" type="submit">
                   Logout
                </button>
            </form>


    </div>
    <button id="tweetBtn"  class="btn btn-tweet nav-tweet" >Tweet a post</button>

    @endauth
</nav>
