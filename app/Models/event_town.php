<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_town extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_event_id',
        'town_id',
    ];
    public function type_event(){
        return $this->belongsTo(type_event::class);
      }
      public function town(){
        return $this->belongsTo(town::class);
      }
}
