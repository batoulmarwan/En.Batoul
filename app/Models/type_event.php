<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_event extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_event',
        
    ];
   public function event(){
        return $this->hasMany(event::class,'type_event_id');
      }
      public function event_town(){
        return $this->hasMany(event_town::class,'type_event_id');
      }
}
