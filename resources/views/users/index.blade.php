
@extends('layouts.app')

@section('content')
<section class="t-feed f fc ac ">


    @include('_cover')

    @auth
        @if(Auth::user()->id == $user->id)
            @include('_t-form')
        @endif
    @endauth

    @include('_feed' , [
        'tweets' => $user->tweets()->latest()->get()
    ])
</section>

@endsection

