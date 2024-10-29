<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\budget;
use App\Models\event;
use App\Models\event_town;
use App\Models\place;
use App\Models\type_events;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Http\Requests\AddeventRequest;
use App\Http\Requests\budgetRequest;
use App\Http\Resources\AddeventResource;
use App\Http\Resources\TownResource;

class EventController extends BaseController
{
        //الأدمن يضيف أنواع الحفلات
    public function addevent(AddeventRequest $request){
         $event = type_events::create([
            'type_event' => $request->type_event,
            ]);
            $addevent= new AddeventResource($event);  
            return $this->sendResponse($addevent, "done");
    }
    // لكن بمصفوفة وحدةيرجع لليوز أنواع الحفلات
   /* public function type_event(){
           
           $event=type_events::pluck('type_event');
           return $this->sendResponse( $event, "successfuly");
         
   }*/
   //يرجع أنوع الحفلات 
   public function type_event(){
           
        $event=type_events::all();
        return $this->sendResponse( $event, "successfuly");
   }
   //يرجع أنواع المحافظات 
   public function GovernorateById(Request $request){
        $data =event_town::where('type_event_id', $request->type_event_id)
        ->with('town')->get();
       
        if (!$data) {
            return $this->sendError("The event not found");
        } 
       return $this->sendResponse($data, "successfully");
    }
    //يرجع المناطق يلي بالمحافظات
    public function placeById(Request $request){
        $data =area::where('town_id', $request->town_id)
        ->get();
        if (!$data) {
            return $this->sendError("The event not found");
        } 
       return $this->sendResponse($data, "successfully");
    }

   
   public function budget(budgetRequest $request){
        $event = budget::create([
           'classify' => $request->classify,
           ]);
            
           return $this->sendResponse($event, "done");
   }
      
   public function budget_me(){
           
        $event=budget::all();
        return $this->sendResponse( $event, "successfuly");
      
}
}


