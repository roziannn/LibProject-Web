<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\PostsComment;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
{
    public function store(Request $request, $id){

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
       
       return redirect()->back();
    }

    public function delete($id){
        $comment = PostsComment::find($id);

        if($comment->user_id != Auth::user()->id)
        abort(403);

        $comment->delete();
        
        return back();
    }
}
