<form class="form" method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')


    <div class="group f ac jb">
        <label class="label f1">Username</label>
        <input class="f1" type="text" name="uname" value="{{ old('uname') ?? auth()->user()->uname }}" required autofocus autocomplete="name" />
    </div>
    <div class="group f ac jb">
        <label class="label f1">{{ __('Name') }}</label>
        <input class="f1" type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
    </div>

    <div class="group f ac jb">
        <label class="label f1">{{ __('Email') }}</label>
        <input class="f1" type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>

    <div  class="group f ac jb">
        <label class="label f1">{{ __('Current Password') }}</label>
        <input class="f1" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="group f ac jb">
        <button class="btn btn-auth" type="submit">
            {{ __('Update Profile') }}
        </button>
    </div>

    @if ($errors->any())
            <div class="errors c ">

                <ul class=" errors-list ">
                    @foreach ($errors->all() as $error)
                        <li class="errors-item tc">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
</form>

