<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function timeline(){

        $following = $this->follows()->pluck('id') ;
        return Tweet::whereIn('user_id', $following)
                    ->orWhere('user_id', $this->id)
                    ->latest()
                    ->get();

        $tweets = [...$this->followingTweets() , ...$this->tweets] ;
        return collect($tweets)->sortByDesc('created_at') ;
    }
    public function getAvatarAttribute(){
        return "https://i.pravatar.cc/40?u=" . $this->email ;
    }
    public function getProfileAvatarAttribute(){
        return "https://i.pravatar.cc/150?u=" . $this->email ;
    }
    public function getCoverAttribute(){
        return "https://i.pravatar.cc/400?u=" . $this->email . 'x' ;
    }

    public function tweets() {
        return $this->hasMany(Tweet::class);
    }


    public function follows() {
        return $this->belongsToMany(User::class , 'follows' , 'user_id' , 'following_user_id');
    }
    public function following($user) {
        return $this->follows->contains($user);
    }
    public function follow(User $user) {
        $this->follows()->save($user);
    }
    public function unfollow(User $user) {
        $this->follows()->detach($user);
    }
    public function followingTweets() {
        return $this->follows->map->tweets->flatten()->all() ;

    }
}
