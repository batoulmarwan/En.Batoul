<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servic extends Model
{
    use HasFactory;
    protected $fillable = [
        'decor_id',
        'music_id',
        'food_id',
        
       
    ];
    public function decor(){
        return $this->belongsTo(decor::class);
      }
      public function music(){
        return $this->belongsTo(music::class);
      }
      public function event_servic(){
        return $this->hasMany(event_servic::class,'servic_id');
      }
      public function food(){
        return $this->belongsTo(food::class);
      }
}
