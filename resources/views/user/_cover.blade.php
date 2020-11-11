
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
                <img class="user-avatar" src={{$user->avatar}} />

                <div class="user-param f ac">
                    @if (Auth::user()->id == $user->id)
                        <button class="btn btn-grey">Edit</button>

                    @else
                        <button class="btn btn-tweet">Follow Me!</button>

                    @endif


                </div>
            </div>
            <div class="user-bio">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic quas eius perspiciatis nesciunt! Illum, nemo! Molestias praesentium ad, ipsum id maxime reprehenderit suscipit sequi sunt!
            </div>
        </div>

    </div>
