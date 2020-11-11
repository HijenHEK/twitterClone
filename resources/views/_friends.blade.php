<aside class="t-friends f fc ast js">
    <h3>Following</h3>

        @forelse (auth()->user()->follows as $user)

        <div class="friend">
            <img src={{$user->avatar}} width="35px" alt="" srcset="">
        <a href="/users/{{$user->id}}">{{$user->name}}</a>
        </div>

        @empty
        <div class="friend">
            <h5>Start following people</h5>
        </div>


        @endforelse


</aside>
