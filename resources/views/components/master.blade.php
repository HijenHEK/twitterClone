<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{asset('js/app.js')}}"></script>

</head>

<body>


    @if (session('status'))
    <div>{{ session('status') }}</div>
    @endif
    <div id="tweet" class="t-container c f fc fst">
        @include ('_header')

    {{ $slot }}


    </div>
</body>

</html>
