@extends('layouts.app')

@section('content')
   <div class="container">


        <form class="c mt5" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="group f jb ac">
                <label>{{ __('Name') }}</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            </div>

            <div class="group f jb ac">
                <label>{{ __('Email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required />
            </div>

            <div class="group f jb ac">
                <label>{{ __('Password') }}</label>
                <input type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="group f jb ac">
                <label>{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="group f jc mt2">
                    <a class="link " href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
            </div>

            <div class="group f jc">
                <button class="btn btn-primary " type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

        @if ($errors->any())
            <div class="errors c card">
                <div class="card-head ">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="card-body  ">
                    @foreach ($errors->all() as $error)
                        <li class="errors-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   </div>
@endsection
