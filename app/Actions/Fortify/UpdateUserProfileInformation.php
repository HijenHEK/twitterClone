<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'uname' => ['required', 'string', 'max:255' , 'alpha_dash', Rule::unique('users')->ignore($user)],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validate();

        if(Hash::check($input['password'] ,$user->password )) {
                if ($input['email'] !== $user->email &&
                $user instanceof MustVerifyEmail) {
                    $this->updateVerifiedUser($user, $input);
                } else {
                    $user->forceFill([
                        'name' => $input['name'],
                        'email' => $input['email'],
                    ])->save();
                }
        } else {
            return back()->withErrors(['password'=>'verify your password']);
        }

    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        // $user->sendEmailVerificationNotification();
    }
}
