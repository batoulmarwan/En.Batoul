<?php

namespace App\Http\Controllers;

use App\Models\budget;
use App\Models\char;
use App\Models\event;
use App\Models\event_servic;
use App\Models\food_type;
use App\Models\lite;
use App\Models\place;
use App\Models\music;
use App\Models\sweate_type;
use App\Models\main_cake;
use App\Models\table;
use App\Models\theme;
use App\Models\themeColor;
use App\Models\type_event;
use App\Models\type_events;
use Illuminate\Http\Request;
use App\Http\Requests\DiscripitionRequest;
use App\Http\Requests\StoreRequest;

class DiscriptionController extends BaseController
{
    public function discripition(Request $request){
       $user_id=$request->input('user_id');
        $type_event_id=$request->input('type_event_id');
        $town_id=$request->input('town_id');
        $place_id=$request->input('place_id');
        $area_id=$request->input('area_id');
        $budget_id=$request->input('budget_id');
        $music_id=$request->input('music_id');
        $singe_id=$request->input('singe_id');
        $more_id=$request->input('more_id');
        $main_meal_id=$request->input('main_meal_id');
        $sweate_type_id=$request->input('sweate_type_id');
        $main_cake_id=$request->input('main_cake_id');
        $chare_id=$request->input('chair_number_id');
        $table_id=$request->input('table_number_id');
        $light_id=$request->input('lighting_id');
        $themecolor_id=$request->input('themecolor_id');
        $theme_id=$request->input('theme_id');
       $data =event::with('type_event','town','area','budget','place','music','singe','more','food_type','sweate_type','main_cake','chare','table','theme','lite','theme_color')
       ->where('type_event_id',$type_event_id)
       ->where('budget_id',$budget_id)
       ->where('place_id',$place_id)
       ->where('area_id',$area_id)
        ->where('town_id',$town_id)
        ->where('music_id',$music_id)
        ->where('singe_id',$singe_id)
        ->where('more_id',$more_id)
        ->where('food_type_id',$main_meal_id)
        ->where('sweate_type_id',$sweate_type_id)
        ->where('main_cake_id',$main_cake_id)
        ->where('char_id',$chare_id)
        ->where('table_id',$table_id)
        ->where('theme_id',$theme_id)
        ->where('lite_id',$light_id)
        ->where('theme_color_id',$themecolor_id)
        ->get();
       // ->pluck('price');
        //->unique();
        $data2=place::where('id',$place_id)->first();
        $data3=music::where('id',$music_id)->first();
        $data4=food_type::where('id',$main_meal_id)->first();
        $data5=sweate_type::where('id',$sweate_type_id)->first();
        $data6=main_cake::where('id',$main_cake_id)->first();
        $data7=char::where('id',$chare_id)->first();
        $data8=table::where('id',$table_id)->first();
        $data9=theme::where('id',$theme_id)->first();
        $data10=themeColor::where('id',$themecolor_id)->first();
        $data11=lite::where('id',$light_id)->first();
        $total=$data2['price']+$data3['price']+$data4['price']+$data5['price']+$data6['price']
        +($data7['price']*$data7['num'])+($data8['price']*$data8['num'])+$data9['price']
        +$data10['price']+$data11['price'];
       if ($data->isEmpty()) {
            return $this->sendError("No matching data found.", [], 404);
        }
    //  return $this->sendResponse($data,$total, "successfully");
      return response()->json([
        'Discription'=>$data,
        'total price'=>$total,
    ]);
    }
   
    public function storeIds(StoreRequest $request){
        $event =event::create([
           'type_event_id' => $request->type_event_id,
           'town_id' => $request->town_id,
           'area_id' => $request->area_id,
           'budget_id' => $request->budget_id,
           'place_id' => $request->place_id,
           'music_id' => $request->music_id,
           'singe_id' => $request->singe_id,
           'more_id' => $request->more_id,
           'food_type_id' => $request->main_meal_id,
           'sweate_type_id' => $request->sweate_type_id,
           'main_cake_id' => $request->main_cake_id,
           'char_id' => $request->chair_number_id,
           'table_id' => $request->table_number_id,
           'theme_id' => $request->theme_id,
           'lite_id' => $request->lighting_id,
           'theme_color_id' => $request->themecoloe_id,
           ]);
            
           return $this->sendResponse($event, "done");
   }
}
