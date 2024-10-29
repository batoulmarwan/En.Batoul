<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'town_id',
      //'budget_id',
    ];
    public function town(){
        return $this->belongsTo(town::class);
      }
    /* public function budget(){
        return $this->belongsTo(budget::class);
      }*/
      public function event(){
        return $this->hasMany(event::class,'area_id');
      }
      public function area_budget(){
        return $this->hasMany(area_budget::class,'area_id');
      }
      
}
