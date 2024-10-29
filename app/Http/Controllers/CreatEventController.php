<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\area_budget;
use App\Models\budget;
use App\Models\event_town;
use App\Models\place;
use App\Models\town;
use App\Models\type_event;
use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\Cache;

class CreatEventController extends BaseController
{
    public function GovernorateById(Request $request){
        $user_id=$request->input('user_id');
        $type_event_id=$request->input('type_event_id');
        $town_id=$request->input('town_id');
        $area_id=$request->input('area_id');
        $budget_id=$request->input('budget_id');
       $data =event::with('place')
       ->where('user_id',$user_id)
        ->where('type_event_id',$type_event_id)
        ->where('town_id',$town_id)
        ->where('area_id',$area_id)
        ->where('budget_id',$budget_id)
        ->get();
       // ->pluck('place.name')
        //->unique();
       if ($data->isEmpty()) {
            return $this->sendError("No matching data found.", [], 404);
        }
       return $this->sendResponse($data, "successfully");
    }
    public function gettown(Request $request){
        $type_event_id=$request->input('type_event_id');
        $data =event_town::with('town')
        ->where('type_event_id',$type_event_id)
        ->get();
        if ($data->isEmpty()) {
            return $this->sendError("No matching data found.", [], 404);
        }
       return $this->sendResponse($data, "successfully");
    }
    
   
    public function getarea(Request $request)
{
    $type_event_id=$request->type_event_id;
    $town_id=$request->town_id;
    $area=area::whereHas('town', function ($query) use ( $town_id,$type_event_id) {
        $query->where('id', $town_id)
       -> whereHas('event_town', function ($query) use ($type_event_id) {
            $query->where('type_event_id', $type_event_id);
        });
    })->get();
    if ($area->isEmpty()) {
        return $this->sendError("No matching data found.", [], 404);
    }
    return $this->sendResponse($area, "successfully");
}



public function getbudget(Request $request)
{
   $type_event_id=$request->input('type_event_id');
        $town_id=$request->input('town_id');
        $area_id=$request->input('area_id');

    $budget = area_budget::with('budget')
    ->whereHas('area', function ($query) use ($area_id,$town_id,$type_event_id) {
        $query->where('area_id','=', $area_id)
            ->whereHas('town', function ($query) use ($town_id,$type_event_id) {
                $query->where('town_id','=', $town_id)
                    ->whereHas('event_town', function ($query) use ($type_event_id) {
                        $query->where('type_event_id','=', $type_event_id);
                    });
                });
             })->get();

             if ($budget->isEmpty()) {
                return $this->sendError("No matching data found.", [], 404);
            }

    return $this->sendResponse($budget, "Successfully.");
  
}
public function gethall(Request $request)
{
   $type_event_id=$request->input('type_event_id');
        $town_id=$request->input('town_id');
        $area_id=$request->input('area_id');
        $budget_id=$request->input('budget_id');
    $place = place::whereHas('budget', function ($query) use ($budget_id,$area_id,$town_id,$type_event_id) {
        $query->where('budget_id','=', $budget_id)
    ->whereHas('area_budget', function ($query) use ($area_id,$town_id,$type_event_id) {
        $query->where('area_id','=', $area_id)
        ->whereHas('area', function ($query) use ($area_id,$town_id,$type_event_id) {
            $query->where('area_id','=', $area_id)
            ->whereHas('town', function ($query) use ($town_id,$type_event_id) {
                $query->where('town_id','=', $town_id)
                    ->whereHas('event_town', function ($query) use ($type_event_id) {
                        $query->where('type_event_id','=', $type_event_id);
                    });
                });
            });
        });
             })->get();

             if ($place->isEmpty()) {
                return $this->sendError("No matching data found.", [], 404);
            }

    return $this->sendResponse($place, "Successfully.");
  
}

}
    
   




