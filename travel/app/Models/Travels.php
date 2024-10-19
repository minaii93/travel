<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    protected $primarykey = 'travel_id'; //elsődéeges kulcs neve


    protected $fillable = [
        'evaluation',
        'flight_id',
        'user_id'
    ];

    use HasFactory;
}
