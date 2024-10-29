<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classify extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
    ];
    public function food(){
        return $this->hasMany(food::class,'classify_id');
      }
    
}
