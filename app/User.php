<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'user_name', 'email', 'password', 'profile_image'
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
     * Get the post was that owns the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the followings that owns User. (Abonnements)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings ()
    {
        return $this->belongsToMany(User::class, "followers", "user_id", "following_id")
            ->withTimestamps();
    }

    /**
     * Get the followers that owns User. (Abonnés)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers () {
        return $this->belongsToMany(User::class, "followers", "following_id", "user_id")
            ->withTimestamps();
    }
}
