<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'floor',
        'area_in_square_meters',
        'number_of_beds',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public $timestamps = false;

}