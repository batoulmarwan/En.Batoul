<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'budget_id',
            ];
    public function event(){
    return $this->hasMany(event::class,'place_id');
              }
              public function budget(){
                return $this->belongsTo(budget::class);
              }
              public function place_music(){
                return $this->hasMany(place_music::class,'place_id');
                          }
                          public function place_food(){
                return $this->hasMany(place_food::class,'place_id');
                          }
                          public function food(){
                            return $this->hasMany(food::class,'place_id');
                                      }
                                      public function place_mainfood(){
                                        return $this->hasMany(place_mainfood::class,'place_id');
                                                  }
                                                  public function char_place(){
                                                    return $this->hasMany(chare_place::class,'place_id');
                                                  }
                                                  public function table_place(){
                                                    return $this->hasMany(table_place::class,'place_id');
                                                  }
              
}
