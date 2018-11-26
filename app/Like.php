<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "like"
    ];

    /**
     * Get the post that owns like.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post () {
        return $this->hasOne(Post::class);
    }
}
