<div class="tweet f as js">
    <img class="t-avatar avatar" src={{$tweet->user->avatar}} alt="">

    <div class="t-content">
        <div class="name">
            <a href="/users/{{$tweet->user->uname}}">
                {{$tweet->user->name}}

            </a>

        </div>
        <div class="body">
            {{$tweet->body}}
        </div>
        {{-- <div class="t-img f ac js">
            <img src={{$tweet->image}}  width="100%" alt="">

        </div> --}}
        <div class="react">
        <form action="/tweets/{{$tweet->id}}/like" method="post">
            @csrf
            <button type="submit">
            <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
            {{$tweet->likesCount()}}
        </button>
        </form>
        <form action="/tweets/{{$tweet->id}}/dislike" method="post">
            @csrf
            <button type="submit">
            <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
            {{$tweet->likesCount(false)}}

        </button>
        </form>
    </div>
    </div>
</div>
