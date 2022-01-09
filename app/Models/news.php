<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "news";
    protected $primaryKey = "id";
    protected $fillable = [
        'judul',
        'gambar',
        'url',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
