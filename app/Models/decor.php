<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class decor extends Model
{
    use HasFactory;
    protected $fillable = [
        'num-chair',
        'price_chair',
        'num_table',
        'price_table',
        'light_id',
        'flwer_id',
    ];
    public function servic(){
        return $this->hasMany(servic::class,'decor_id');
      }
      public function light(){
        return $this->belongsTo(light::class);
      }
      public function flwer(){
        return $this->belongsTo(flwer::class);
      }
}
