<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place_food extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'food_id',
     ];
     public function food(){
        return $this->belongsTo(food::class);
      }
      public function place(){
        return $this->belongsTo(place::class);
      }
}
