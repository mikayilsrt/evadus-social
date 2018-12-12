<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        "follower_id", "following_id"
    ];

    public function user () {
        return $this->hasOne(User::class);
    }
}
