<form class="form " method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')

    <div  class="group f ac jb">
        <label class="label f1">{{ __('Current Password') }}</label>
        <input class="f1" type="password" name="current_password" required autocomplete="current-password" />
    </div>

    <div class="group f ac jb">
        <label class="label f1">{{ __('Password') }}</label>
        <input class="f1" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="group f ac jb">
        <label class="label f1">{{ __('Confirm Password') }}</label>
        <input class="f1" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="group f ac jb">
        <button class="btn btn-auth" type="submit">
            {{ __('Save') }}
        </button>
    </div>

    @if ($errors->any())
            <div class="errors c">
                <ul class=" errors-list">
                    @foreach ($errors->all() as $error)
                        <li class="errors-item tc" >{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</form>

