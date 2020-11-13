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
            <img src={{$tweet->image}} width="100%" alt="">

    </div> --}}
    <div class="react f ac">
        <form action="/tweets/{{$tweet->id}}/like" method="post">
            @csrf
        <button type="submit" class={{$tweet->liked(Auth::user()) ? 'like' : ''}}>
            <i class="fa fa-thumbs-up "></i>
                <span>{{$tweet->likesCount() ?: ''}}</span>

            </button>
        </form>
        <form action="/tweets/{{$tweet->id}}/dislike" method="post">
            @csrf
            <button type="submit" class={{$tweet->liked(Auth::user(),false) ? 'dislike' :''}}>
                <i class="fa fa-thumbs-down"></i>
                <span>{{$tweet->likesCount(false) ?: ''}} </span>
            </button>
        </form>
    </div>
</div>
</div>
