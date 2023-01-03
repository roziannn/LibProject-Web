<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\PostsComment;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
{
    public function store(Request $request, $id)
    {

        $this->validate($request, [
            'subject' => 'required|min:5',
        ]);

        Post::findOrFail($id);

        PostsComment::create([
            'subject' => $request->subject,
            'post_id' => $id,
            'user_id' => Auth::user()->id
        ]);

        $request->accepts('session');
        session()->flash('success', 'Comment successed!');

        $user = Auth::user();
        
        $this->notify($user, $id);

        return redirect()->back();
    }

    private function notify($user, $post_id)
    {
        $target_id = Post::find($post_id)->user_id;

        if ($user->id != $target_id)
            Notification::create([
                'user_id' => $target_id,
                'post_id' => $post_id,
                'message' => 'komentar baru dari ' . $user->username
            ]);
    }

    public function delete($id)
    {
        $comment = PostsComment::find($id);

        if ($comment->user_id != Auth::user()->id)
            abort(403);

        $comment->delete();

        return back()->with('deleteSuccess', 'Komentar berhasil dihapus!');
    }
}
