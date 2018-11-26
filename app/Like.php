<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        "like"
    ];

    public function post () {
        return $this->hasOne(Post::class);
    }
}
