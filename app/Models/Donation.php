<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = "donations";
    protected $primaryKey = "id";
    protected $fillable = [
        'users_id',
        'nominal',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
