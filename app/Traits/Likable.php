<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Likable
{



    public function like($user , $liked = true){
        return $this->likes()->updateOrCreate(
            [
                "user_id" => $user ? $user->id : Auth::user()->id ,
                "tweet_id" => $this->id
            ],[
                "liked" => $liked

            ]
        );
    }

    public function likesCount(bool $liked = true) {
        return $this->likes()->where('liked', $liked )->count() ;
    }

    function liked(User $user ,bool $liked = true) {
        return $this->likes()->where('user_id', $user->id)
                      ->where('liked', $liked )
                      ->exists() ;
    }

}
