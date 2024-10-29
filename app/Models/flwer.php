<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flwer extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'price',
        'classify',
        'color_id',
       
    ];
    public function decor(){
        return $this->hasMany(decor::class,'flwer_id');
      }
      public function color(){
        return $this->belongsTo(color::class);
      }
}
