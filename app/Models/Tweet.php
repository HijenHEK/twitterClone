<?php

namespace App\Models;

use App\Traits\Likable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tweet extends Model
{

    use Likable;

    protected $guarded = [] ;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute(){
        return "https://i.pravatar.cc/250?img=" . $this->id ;

    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
