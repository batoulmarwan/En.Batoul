<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class light extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_light',
        'price',
    ];
    public function decor(){
        return $this->hasMany(decor::class,'light_id');
      }
}
