<form class="form tsm" method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    @if(session()->has('profile-update'))
    <div class="group">
        <div class="msg-success tc">
            {{ session()->get('profile-update') }}
        </div>
    </div>
    @endif

    <div class="group f ac jb">
        <label class="label f1">Username</label>
        <input class="f1" type="text" name="uname" value="{{ old('uname') ?? auth()->user()->uname }}" required autofocus autocomplete="name" />

    </div>
    @error('uname')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <label class="label f1">{{ __('Name') }}</label>
        <input class="f1" type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
    </div>
    @error('name')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <label class="label f1">{{ __('Email') }}</label>
        <input class="f1" type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>
    @error('email')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div  class="group f ac jb">
        <label class="label f1">{{ __('Current Password') }}</label>
        <input class="f1" type="password" name="old_password" required autocomplete="odl_password" />
    </div>
    @error('old_password')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <button class="btn btn-auth tsm" type="submit">
            {{ __('Update Profile') }}
        </button>


    </div>


</form>

