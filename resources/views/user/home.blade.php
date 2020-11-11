@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
    <div id="tweet" class="t-container c f fc fst">
        @include ('user._header')

        <main class="t-main f as ">
            @include('user._nav')

            @include('user._feed')

            @include('user._friends')
        </main>

    </div>



@endsection
