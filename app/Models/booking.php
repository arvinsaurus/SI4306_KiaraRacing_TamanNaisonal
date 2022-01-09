<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $primaryKey = "id";
    protected $fillable = [
        'users_id',
        'tanggal_tiket',
        'tiket_dewasa',
        'tiket_anak',
        'total',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'tanggal_tiket',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
