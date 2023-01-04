<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Notification;
use App\Models\PostsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle($type, $object_id)
    {

        if ($type == "POST") {
            $object = Post::findOrFail($object_id);
            $post_id = $object->id;
        } else {
            $object = PostsComment::findOrFail($object_id);
            $post_id = $object->post_id;
        }


        $data = ['user_id' => Auth::user()->id];

        //if user udah like, delete like nya jadi unlike. kalau belum, statusnya baru di 'like'
        if ($object->likes()->where($data)->exists()) {
            $object->likes()->where($data)->delete();
            $msg = ['status' => 'UNLIKE'];

            $this->cancelNotify(Auth::user(), $post_id);
        } else {
            $object->likes()->create($data);
            $msg = ['status' => 'LIKE'];

            $this->notify(Auth::user(), $post_id);
        }

        return response()->json($msg);
    }

    private function notify($user, $post_id)
    {
        $target_id = Post::find($post_id)->user_id;

        if ($user->id != $target_id) {

            Notification::create([
                'user_id' => $target_id,
                'post_id' => $post_id,
                'message' => 'likes dari ' . $user->username
            ]);
        }
    }

    public function cancelNotify($user, $post_id)
    {
        $target_id = Post::find($post_id)->user_id;

        if ($user->id != $target_id) {
            Notification::where('user_id', $target_id)->where('post_id', $post_id)
            ->where('message', 'like', '%likes%')->delete();
        }
    }
}
