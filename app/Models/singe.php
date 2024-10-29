<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_singe',
        'music_id',
        ];
        public function music(){
            return $this->belongsTo(music::class);
          }
          public function event(){
            return $this->hasMany(event::class,'singe_id');
          }
}
