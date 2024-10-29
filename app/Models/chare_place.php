<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chare_place extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'char_id',
    ];
    public function place(){
        return $this->belongsTo(place::class);
      }
      public function char(){
        return $this->belongsTo(char::class);
      }
}
