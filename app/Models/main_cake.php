<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_cake extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];
    public function food(){
        return $this->hasMany(food::class,'main_cake_id');
      }
      public function event(){
        return $this->hasMany(event::class,'main_cake_id');
      }
}
