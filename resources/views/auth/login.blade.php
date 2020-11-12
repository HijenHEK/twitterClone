<x-master>

    <div class="container wf hf">
            @if (session('status'))
            <div class="status">
                {{ session('status') }}
            </div>
             @endif



        <form class="form sign-form c" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="group f ac jb">
                <label  >{{ __('Email') }}</label>
                <input class="control" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <div class="group f ac jb">
                <label  >{{ __('Password') }}</label>
                <input class="control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="group f ac js">
                <label  >{{ __('Remember me') }}</label>
                <input class="control" type="checkbox" name="remember">
            </div>

            @if (Route::has('password.request'))
                <div class="group f jc">
                    <a class="link c" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>

            @endif
            <div class="group f jc">
                <a class="link c" href="/register">
                    New here ? Sign up
                </a>
            </div>
            <div class="group f jc">
                <button class="btn btn-auth" type="submit">
                {{ __('Login') }}
                </button>
            </div>

        </form>


        @if ($errors->any())
            <div class="errors card c">
                <div class="card-head">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="card-body ">
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</x-master>
