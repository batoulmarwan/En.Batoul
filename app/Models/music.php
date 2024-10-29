<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_music',
        'price',

    ];
    public function servic(){
        return $this->hasMany(servic::class,'music_id');
      }
      public function performence(){
        return $this->belongsTo(performence::class);
      }
      public function place_music(){
        return $this->hasMany(place_music::class,'music_id');
                  }
                  public function singe(){
                    return $this->hasMany(singe::class,'music_id');
                              }
                              public function event(){
                                return $this->hasMany(event::class,'music_id');
                              }
}
