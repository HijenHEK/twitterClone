<x-app>



    <div class="notification f fc jc">


        @foreach (Auth::user()->unreadNotifications as $notif)




                    {{-- <div class="f ac js">

                        <img class="t-avatar avatar" src={{$user->avatar}} alt="">

                            <a href="/users/{{$user->uname}}">
                                {{$user->name}}
                                <small>{{'@'.$user->uname}}</small>
                            </a>

                    </div> --}}


                @if($notif->type == 'App\Notifications\FollowNotififcation')

                <a href="/users/{{$notif->data['follower']['uname']}}">

                <div class="notification-card unread f1 f ac js">


                            {{$notif->data['follower']['name'] }}
                            Followed you
                        <small>
                            &nbsp;
                            {{\Carbon\Carbon::parse($notif->data['follower']['created_at'])->diffForhumans()}}
                        </small>
                </div>
            </a>

                    {{-- <form action="{{$user->path('follow')}}" method="post">
                        @csrf
                        <button type="submit"
                                class="btn user-btn {{Auth::user()->following($user) ? 'btn-tweet-red' : 'btn-tweet'}} ">
                                {{Auth::user()->following($user) ? 'Unfollow' : 'Follow'}}
                        </button>
                    </form> --}}
                @endif


                        {{-- <form action="{{$user->path('follow')}}" method="post">
                            @csrf
                            <button type="submit"
                                    class="btn user-btn {{Auth::user()->following($user) ? 'btn-tweet-red' : 'btn-tweet'}} ">
                                    {{Auth::user()->following($user) ? 'Unfollow' : 'Follow'}}
                            </button>
                        </form> --}}



        @endforeach

        @foreach (Auth::user()->readNotifications as $notif)
        @if($notif->type == 'App\Notifications\FollowNotififcation')

        {{$notif}}

    @endif

        @endforeach

            {{-- {{ $users->links() }} --}}
    </div>



</x-app>
