<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        
       // 'date_event',
        'type_event_id',
        'town_id',
        'area_id',
        'budget_id',
        'place_id',
         'music_id',
         'singe_id',
         'more_id',
         'food_type_id',
         'sweate_type_id',
         'main_cake_id',
         'char_id',
         'table_id',
         'theme_id',
         'lite_id',
         'theme_color_id',
    ];  
  //  public $timestamps=false;
  public function type_event(){
    return $this->belongsTo(type_event::class);
  }
  public function budget(){
    return $this->belongsTo(budget::class);
  }
  public function place(){
    return $this->belongsTo(place::class);
  }
  public function town(){
    return $this->belongsTo(town::class);
  }
  public function area(){
    return $this->belongsTo(area::class);
  }
  public function user(){
    return $this->belongsTo(User::class);
  }
 /* public function admin(){
    return $this->belongsTo(admin::class);
  }*/
  public function event_servic(){
    return $this->hasMany(event_servic::class,'event_id');
  }
  public function music(){
    return $this->belongsTo(music::class);
  }
  public function singe(){
    return $this->belongsTo(singe::class);
  }
  public function more(){
    return $this->belongsTo(more::class);
  }
  public function food_type(){
    return $this->belongsTo(food_type::class);
  }
  public function sweate_type(){
    return $this->belongsTo(sweate_type::class);
  }
  public function main_cake(){
    return $this->belongsTo(main_cake::class);
  }
  public function chare(){
    return $this->belongsTo(char::class);
  }
  public function table(){
    return $this->belongsTo(table::class);
  }
  public function theme(){
    return $this->belongsTo(theme::class);
  }
  public function lite(){
    return $this->belongsTo(lite::class);
  }
  public function theme_color(){
    return $this->belongsTo(themeColor::class);
  }
}
