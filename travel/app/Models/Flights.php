<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    protected $primarykey = 'flight_id'; //elsődéeges kulcs neve

    use HasFactory;

    protected $fillable = [
        'date', 
        'airline_id',
        'limit'

    ];

}
