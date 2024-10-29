<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puplicEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_event',
        'name_event',
        'name_singer',
        'place_event',
        'date_event',
        'clock_event',
        'price_taket',
        //'servic',
        //'area_event',
        //'name_responsible',
        //'day_event',
     ];
}
