<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "following_id"
    ];

    /**
     * Get the user that owns Follow.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user () {
        return $this->hasOne(User::class);
    }
}
