<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'food_type_id',
        'sweate_type_id',
        'main_cake_id',
        'soft_drinks',
        'alcoholic',
    ];
    public function servic(){
        return $this->hasMany(servic::class,'food_id');
      }
      public function classifies(){
        return $this->belongsTo(classify::class);
      }
      public function food_type(){
        return $this->belongsTo(food_type::class);
      }
      public function sweate_type(){
        return $this->belongsTo(sweate_type::class);
      }
      public function main_cake(){
        return $this->belongsTo(main_cake::class);
      }
      public function place_food(){
        return $this->hasMany(place_food::class,'food_id');
                  }
                  public function place(){
                    return $this->belongsTo(place::class);
                  }
}
