<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    protected $primarykey = 'airline_id'; //elsődéeges kulcs neve

    use HasFactory;

    protected $fillable = [
        'name', 
        'country',
        

    ];

}
