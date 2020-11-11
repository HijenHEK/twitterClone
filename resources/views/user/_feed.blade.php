<section class="t-feed f fc ac ">
    @include('user._t-form')
    <div class="feed">

        @foreach ($tweets as $tweet)
            @include('user._tweet')

        @endforeach




    </div>
</section>
