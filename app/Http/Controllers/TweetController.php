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
            'tweet' => 'required|max:255'
        ]);
        Tweet::create([
            'user_id' => Auth::user()->id ,
            'body' => request('tweet')
        ]);
        return back() ;
    }
    public  function index()
    {

        return view('tweets.index',[
            'tweets' => auth()->user()->timeline()
        ]);
    }


}
