

<x-app>




    @include('_cover')

    @auth
        @if(Auth::user()->id == $user->id)
            @include('_t-form')
        @endif
    @endauth

    @include('_feed' , [
        'tweets' => $user->tweets()->latest()->get()
    ])

</x-app>

