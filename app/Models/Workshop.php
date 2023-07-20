<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workshop extends Model
{
    use HasFactory, sluggable;

    protected $fillable = [
        'token',
        'workshop_name',
        'workshop_type',
        'workshop_fee',
        'workshop_img',
        'desc',
        'start_date',
        'end_date',
        'workshop_status',
        'member_join',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'workshop_name'
            ]
        ];
    }
}
