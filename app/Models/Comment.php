<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post() {
        // return $this->belongsTo(Post::class, 'id', 'post_id'); // by default, so we don't need to specify the columns, refer laravel documentation on "belongsTo" or "oneToMany"
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
