<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [] ;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function getImageAttribute(){
        return "https://i.pravatar.cc/250?img=" . $this->id ;

    }
}
