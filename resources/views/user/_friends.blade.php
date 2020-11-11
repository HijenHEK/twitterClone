<aside class="t-friends f fc ast js">
    <h3>Following</h3>

        @foreach (auth()->user()->follows as $user)

        <div class="friend">
            <img src={{$user->avatar}} width="35px" alt="" srcset="">
        <a href="/users/{{$user->id}}">{{$user->name}}</a>
        </div>

        @endforeach



</aside>
