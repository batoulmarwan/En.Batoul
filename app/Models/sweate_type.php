<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sweate_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];
    public function food(){
        return $this->hasMany(food::class,'sweate_type_id');
      }
      public function event(){
        return $this->hasMany(event::class,'sweate_type_id');
      }
}
