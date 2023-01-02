<?php

namespace App\Models;

use App\Models\LikesTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable, LikesTrait;

    protected $guarded = ['id'];
    protected $with = ['category', 'user'];
    
    public function scopeFilter($query, array $filters)
    {
        
        $query->when( $filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'.$search.'%')
            ->orWhere('body','like', '%'.$search.'%'); 
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(PostsComment::class)->withCount('likes')->orderBy('created_at', 'desc');
    }

    public function getRouteKeyName()
    {
     return 'slug';   
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

