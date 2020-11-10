<section class="t-feed f fc ac ">
    @include('user._t-form')
    <div class="feed">

        @for ($i = 0; $i < 5; $i++)
            @include('user._tweet')

        @endfor


    </div>
</section>
