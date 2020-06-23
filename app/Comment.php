<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'posts_id',
        'title',
        'body'
    ];

    public function user() {
        return $this->belongsTo('App\Post');
    }
}
