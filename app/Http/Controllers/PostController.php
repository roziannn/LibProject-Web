<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Category;
use App\Models\PostsComment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('posts', [
            "title" => "Project Available" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString(),
            'categories' => Category::all(),
        ]);

        
    }

    public function show(Post $post){

        $post->loadCount('likes'); 
        return view('post', ["title" => "Single Post","active" => 'posts',
            "post" => $post
        ]);
    }
}