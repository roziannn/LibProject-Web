<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'workshop_name',
        'desc',
        'start_date',
        'end_date',
        'workshop_status',
        'member_join',
    ];
}
