<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;

//di trait untuk model post dan comment
//jadi nanti likeable_typenya bisa dari model post or comment
trait LikesTrait{
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }

    public function is_liked(){
        return $this->likes->where('user_id', Auth::user()->id)->count();
        //is_liked = udah di like atau belum sama usernya
    }
}