<?php

namespace App\Models;

use App\Models\LikesTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostsComment extends Model
{
    use HasFactory, LikesTrait;

    protected $fillable = [
        'subject', 'user_id', 'post_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
