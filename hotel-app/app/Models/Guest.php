<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public $timestamps = false;

}