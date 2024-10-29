<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class town extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        
    ];
    
    public function event_town(){
        return $this->hasMany(event_town::class,'town_id');
}
public function area(){
    return $this->hasMany(area::class,'town_id');
              }
              public function event(){
                return $this->hasMany(event::class,'town_id');
                          }
}