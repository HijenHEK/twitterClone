
@extends('user.home')

@section('main')
<section class="t-feed f fc ac ">


    @include('user._cover')

    @auth
        @if(Auth::user()->id == $user->id)
            @include('user._t-form')
        @endif
    @endauth

    @include('user._feed' , [
        'tweets' => $user->tweets()->latest()->get()
    ])
</section>

@endsection

