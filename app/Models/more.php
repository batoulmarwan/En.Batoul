<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class more extends Model
{
    use HasFactory;
    protected $fillable = [
        'more',
    ];
    public function event(){
        return $this->hasMany(event::class,'more_id');
      }
}
