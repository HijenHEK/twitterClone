<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{

    public function store(User $user)
    {
        Auth::user()->follows()->toggle($user);
        return back();
    }

}
