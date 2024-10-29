<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    use HasFactory;
    protected $fillable = [
        'num',
        'price',
    ];
    public function char_place(){
        return $this->hasMany(chare_place::class,'char_id');
      }
      public function event(){
        return $this->hasMany(event::class,'char_id');
      }
}
