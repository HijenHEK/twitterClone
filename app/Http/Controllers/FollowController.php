<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\FollowNotififcation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{

    public function store(User $user)
    {
        Auth::user()->follows()->toggle($user);

        if(Auth::user()->following($user)){
            $user->notify(new FollowNotififcation(Auth::user()));
        }
        return back();
    }



}
