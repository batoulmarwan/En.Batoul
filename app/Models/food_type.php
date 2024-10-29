<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];
    public function food(){
        return $this->hasMany(food::class,'food_type_id');
      }
      public function place_mainfood(){
        return $this->hasMany(place_mainfood::class,'food_type_id');
      }
      public function event(){
        return $this->hasMany(event::class,'food_type_id');
      }
}
