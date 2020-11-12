
    <div class="feed">

        @foreach ($tweets as $tweet)
            @include('_tweet')

        @endforeach


        {{$tweets->links()}}


    </div>
