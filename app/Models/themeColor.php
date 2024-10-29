<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class themeColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'price',
    ];
    public function event(){
        return $this->hasMany(event::class,'theme_color_id');
      }
}
