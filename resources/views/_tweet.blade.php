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
        @if ($images = $tweet->image)
            <div class="t-images f fw">
                @if (count($images)>1)
                <i id="slide-backward" class="fa fa-arrow-left slide-backward ">  </i>
                <i id="slide-forward" class="fa fa-arrow-right slide-forward"></i>

                @endif
                @foreach ($images as $image)
                    <span class="image  f ac jc">
                        <img class="img" src={{$image}} alt="">
                    </span>
                @endforeach

            </div>
        @endif
       
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
