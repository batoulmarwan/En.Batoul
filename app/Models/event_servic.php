<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_servic extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'servic_id',
    ];  
    public function event(){
        return $this->belongsTo(event::class);
      }
      public function servic(){
        return $this->belongsTo(servic::class);
      }
}
