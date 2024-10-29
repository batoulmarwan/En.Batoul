<?php

namespace App\Http\Controllers;

use App\Models\food_type;
use App\Models\main_cake;
use App\Models\music;
use App\Models\sweate_type;
use Illuminate\Http\Request;
use App\Models\puplicEvent;
use App\Models\place;
use App\Models\more;
use App\Models\singe;
use App\Models\place_music;
use App\Models\food;
use App\Http\Requests\puplicRequest;

class PuplicEventController extends BaseController
{
    public function addEventPuplic(PuplicRequest $request){
        $event =puplicEvent ::create([
           'type_event' => $request->type_event,
           'name_event' => $request->name_event,
           'name_singer' => $request->name_singer,
           'place_event' => $request->place_event,
           'date_event' => $request->date_event,
           'clock_event' => $request->clock_event,
           'price_taket' => $request->price_taket,
          // 'day_event' => $request->day_event,
          // 'area_event' => $request->area_event,
          // 'name_responsible' => $request->name_responsible,
          // 'servic' => $request->servic,
           ]);
            
           return $this->sendResponse($event, "done");
   }
   public function getPlace(){
    $data=place::all();
    return $this->sendResponse($data, "successfuly");
   }
   public function getMusic(Request $request){
    $place_id=$request->input('place_id');
    $data1=more::all();
    $data=place_music::with('music')
    ->where('place_id', $request->place_id)->get();
    $data2=singe::all();
    //return $this->sendResponse($data2,$data, "successfully");
    return response()->json([
        'typemusic'=>$data,
        'sing'=>$data2,
        'more'=>$data1
    ]);
}
public function updateTypeMusic(Request $request,$id){
    
    $data=music::where('id', $request->id)->update([
        'type_music'=>$request->type_music,
        'price'=>$request->price,
     ]);
    
 return $this->sendResponse($data, "Edited successfully");
}
public function updateSinge(Request $request,$id){
    
    $data=singe::where('id', $request->id)->update([
        'name_singe'=>$request->name_singe,
       
     ]);
    
 return $this->sendResponse($data, "Edited successfully");
}
public function updateMore(Request $request,$id){
    
    $data=more::where('id', $request->id)->update([
        'more'=>$request->more,
       
     ]);
    
 return $this->sendResponse($data, "Edited successfully");
}
///////////////////////////////////////////////////////////////////////////////
public function getfoodAdmin(Request $request){
        
    $place_id=$request->input('place_id');
 $data=food::where('place_id',$place_id)
  ->with('food_type')
  ->get();
  $data1=food::where('place_id',$place_id)
  ->with('sweate_type')
  ->get();
  $data2=food::where('place_id',$place_id)
  ->with('main_cake')
  ->get();
    return response()->json([
        'mainMeal'=>$data,
      'SweateType'=>$data1,
        'MainCake'=>$data2,
    ]);
    }
    public function updateMainMeal(Request $request,$id){
    
        $data=food_type::where('id', $request->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
           
         ]);
        
     return $this->sendResponse($data, "Edited successfully");
    }
    public function updateSweet(Request $request,$id){
    
        $data=sweate_type::where('id', $request->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
           
         ]);
        
     return $this->sendResponse($data, "Edited successfully");
    }
    public function updateCake(Request $request,$id){
    
        $data=main_cake::where('id', $request->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
           
         ]);
        
     return $this->sendResponse($data, "Edited successfully");
    }
}