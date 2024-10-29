<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theme extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_theme',
        'price',
    ];
    public function event(){
        return $this->hasMany(event::class,'theme_id');
      }
}
