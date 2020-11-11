
    <div class="cover   ">

    <div class="cover-thumb f ac">

        <img src={{$user->cover}} />
    </div>

        <div class="cover-content f fc ac">
            <div class="user-info f ae jb">
                <div class="user-name f fc">
                    <a href="/users/{{$user->id}}">
                        {{$user->name}}

                    </a>
                    <small>
                        Webdev
                    </small>

                </div>
                <img class="user-avatar" src={{$user->profileAvatar}} />

                <div class="user-param f ac je">
                    @if (Auth::user()->id == $user->id)
                        <button class="btn user-btn btn-grey">
                            <a href="/users/edit">
                                Edit
                            </a>
                        </button>

                    @else

                        @if (Auth::user()->following($user))
                            <form action="/unfollow/{{$user->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn user-btn btn-tweet-red">Unfollow Me</button>
                            </form>
                        @else
                            <form action="/follow/{{$user->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn user-btn btn-tweet">Follow Me!</button>
                            </form>
                        @endif


                    @endif


                </div>
            </div>
            <div class="user-bio">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic quas eius perspiciatis nesciunt! Illum, nemo! Molestias praesentium ad, ipsum id maxime reprehenderit suscipit sequi sunt!
            </div>
        </div>

    </div>
