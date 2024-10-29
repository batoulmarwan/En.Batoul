<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dateWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'month',
        'date',
        'day',
        'date_start',
        'date_finish',
        'status',
       ];
       public function place(){
           return $this->belongsTo(place::class);
         }
}
