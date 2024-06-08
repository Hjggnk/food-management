<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // 允许大规模赋值的字段
    protected $fillable = [
        'name',
        'desc',
        'price',
        'img_url',
        'production_date',
        'shelf_life',
    ];
}