<?php

namespace Patter;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The following that belong to the user.
     */
    public function following()
    {
        return $this->belongsToMany('Patter\User', 'followers', 'follower_user_id', 'user_id')->withTimestamps();
    }
    public function isFollowing(User $user)
    {
        return !is_null($this->following()->where('user_id', $user->id)->first());
    }

    /*
     * The followers that belong to the user
     */
    public function followers()
    {
        return $this->belongsToMany('Patter\User', 'followers', 'user_id', 'follower_user_id')->withTimestamps();
    }

        public function tweets()
    {
        // 記事を新しい順で取得する
        return $this->hasMany('Patter\tweets', 'foreign_key', 'other_key');
    }
}
