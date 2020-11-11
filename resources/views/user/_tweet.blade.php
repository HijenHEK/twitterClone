<div class="tweet f as js">
    <img class="t-avatar" src={{$tweet->user->avatar}} alt="">

    <div class="t-content">
        <div class="name">
            {{$tweet->user->name}}

        </div>
        <div class="body">
            {{$tweet->body}}
        </div>
        <div class="t-img f ac js">
            <img src={{$tweet->image}}  width="100%" alt="">

        </div>
        <div class="react">
            <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
            <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
        </div>
    </div>
</div>
