<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle($post_id){

        $post = Post::findOrFail($post_id);
        $data = ['user_id' => Auth::user()->id];

        //if user udah like, delete like nya jadi unlike. kalau belum, statusnya baru di 'like'
        if($post->likes()->where($data)->exists()){
            $post->likes()->where($data)->delete();
            $msg = ['status' => 'UNLIKE'];
        } else {
            $post->likes()->create($data);
            $msg = ['status' => 'LIKE'];
        }

        return response()->json($msg);
    }
}
