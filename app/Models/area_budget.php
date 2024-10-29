<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area_budget extends Model
{
    use HasFactory;
    protected $fillable = [
        'area_id',
       'budget_id',
    ];
    public function budget(){
        return $this->belongsTo(budget::class);
      }
      public function area(){
        return $this->belongsTo(area::class);
      }
}
