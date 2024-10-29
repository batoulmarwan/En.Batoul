<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dateHall extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'date',
        'day',
        'date_start',
        'date_finish',
       ];
       public function place(){
        return $this->belongsTo(place::class);
      }
}
