<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle($type, $object_id){

        if($type == "POST"){
            $object = Post::findOrFail($object_id);
        }else{
            $object = PostsComment::findOrFail($object_id);
        }

        
        $data = ['user_id' => Auth::user()->id];

        //if user udah like, delete like nya jadi unlike. kalau belum, statusnya baru di 'like'
        if($object->likes()->where($data)->exists()){
            $object->likes()->where($data)->delete();
            $msg = ['status' => 'UNLIKE'];
        } else {
            $object->likes()->create($data);
            $msg = ['status' => 'LIKE'];
        }

        return response()->json($msg);
    }
}
