<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExploreController extends Controller
{
    //

    public function index() {
        return view('explore.index',[
            'users' => User::paginate(20)->except(Auth::user()->id)
        ]);
    }
}
