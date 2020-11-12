<form class="form tsm" method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')
    @if(session()->has('password-update'))
    <div class="group">
        <div class="msg-success tc">
            {{ session()->get('password-update') }}
        </div>
    </div>
    @endif
    <div  class="group f ac jb">
        <label class="label f1">{{ __('Current Password') }}</label>
        <input class="f1" type="password" name="current_password" required autocomplete="current-password" />
    </div>
    @error('current_password')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <label class="label f1">{{ __('Password') }}</label>
        <input class="f1" type="password" name="password" required autocomplete="new-password" />
    </div>
    @error('password')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <label class="label f1">{{ __('Confirm Password') }}</label>
        <input class="f1" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>
    @error('password_confirmation')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <button class="btn btn-auth tsm" type="submit">
            {{ __('Save') }}
        </button>


    </div>


</form>

