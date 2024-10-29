<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_place extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'table_id',
    ];
    public function place(){
        return $this->belongsTo(place::class);
      }
      public function table(){
        return $this->belongsTo(table::class);
      }
}
