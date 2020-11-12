<x-app>



    <div class="explore f fc jc">

        @foreach ($users as $user)
            <div class="user-card f1 f ac jb">
                    <div class="f ac js">

                        <img class="t-avatar avatar" src={{$user->avatar}} alt="">

                            <a href="/users/{{$user->uname}}">
                                {{$user->name}}
                                <small>{{'@'.$user->uname}}</small>
                            </a>

                    </div>

                        <form action="{{$user->path('follow')}}" method="post">
                            @csrf
                            <button type="submit"
                                    class="btn user-btn {{Auth::user()->following($user) ? 'btn-tweet-red' : 'btn-tweet'}} ">
                                    {{Auth::user()->following($user) ? 'Unfollow' : 'Follow'}}
                            </button>
                        </form>

            </div>
        @endforeach

    </div>

</x-app>
