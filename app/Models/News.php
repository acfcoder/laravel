<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title', 'content', 'author', 'pub_date', 'image'
    ];

    protected $casts = [
        'pub_date' => 'datetime',
    ];
}
