<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place_mainfood extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'food_type_id',
     ];
     public function typefood(){
        return $this->belongsTo(food_type::class);
      }
      public function place(){
        return $this->belongsTo(place::class);
      }
}
