<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place_music extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'music_id',
     ];
     public function music(){
        return $this->belongsTo(music::class);
      }
      public function place(){
        return $this->belongsTo(place::class);
      }
}
