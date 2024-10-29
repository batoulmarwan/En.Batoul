<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budget extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'classify',
       
    ];
    public function area(){
        return $this->hasMany(area::class,'budget_id');
      }
     
      public function place(){
        return $this->hasMany(place::class,'budget_id');
      }
    public function event(){
        return $this->hasMany(event::class,'budget_id');
      }
      public function area_budget(){
        return $this->hasMany(area_budget::class,'budget_id');
      }
}
