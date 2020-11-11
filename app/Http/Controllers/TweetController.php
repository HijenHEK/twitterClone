<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    //


    public  function store()
    {
        Request()->validate([
            'body' => 'required|max:255'
        ]);
        Tweet::create([
            'user_id' => Auth::user()->id ,
            'body' => request('body')
        ]);
        return back() ;
    }
}
