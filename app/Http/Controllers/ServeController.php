<?php

namespace App\Http\Controllers;

use App\Http\Resources\DrinkingResource;
use App\Models\char;
use App\Models\chare_place;
use App\Models\drink;
use App\Models\food_type;
use App\Models\lite;
use App\Models\main_cake;
use App\Models\more;
use App\Models\food;
use App\Models\place;
use App\Models\place_mainfood;
use App\Models\place_music;
use App\Models\place_food;
use App\Models\music;
use App\Models\puplicEvent;
use App\Models\singe;
use App\Models\sweate_type;
use App\Models\table;
use App\Models\User;
use App\Models\table_place;
use App\Models\theme;
use App\Models\themeColor;
use Illuminate\Http\Request;

class ServeController extends BaseController
{
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
       /* $place_id=$request->input('place_id');
        $data=music::with(['singe','place_music'])
        ->whereHas('place_music', function ($query) use ( $place_id) {
            $query->where('place_id', $place_id);
        })->get();
        if ($data->isEmpty()) {
            return $this->sendError("No matching data found.", [], 404);
        }
        return $this->sendResponse($data, "successfully");*/
    }
    public function getfood(Request $request){
        
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
        public function getdecore(Request $request){
            $place_id=$request->input('place_id');
            $char=chare_place::where('place_id',$place_id)
            ->with('char')
            ->get();
            $table=table_place::where('place_id',$place_id)
            ->with('table')
            ->get();
            $lite=lite::all();
            $theme=theme::all();
            $theme_color=themeColor::all();
            return response()->json([
                'ChairsNumber'=>$char,
                'TableesNumber'=>$table,
                'Lighting'=>$lite,
                'Theme'=>$theme,
                'ThemeColor'=>$theme_color,
            ]);
        }
        public function getboll1(Request $request){
            $drink=drink::pluck('soft_drinks');
            return response()->json(['hkh'=> $drink]
        );
        }
        public function getName(Request $request){
        $public=puplicEvent::get(['name_event','type_event']);
        return $this->sendResponse($public, "successfully");
        }
        public function getdiscription(Request $request){
            $public=puplicEvent::get();
            return $this->sendResponse($public, "successfully");
            }
            public function getbookpuplic(Request $request){
                $Id = $request->input('puplic_id');
                $reservation =auth()->user();
                $total=$reservation['wallet'];
                $public=puplicEvent::where('id',$Id)->first();
                 $public1=$public['price_taket'];
                 if ($public1>$total) {
                     return response()->json(['message' => 'Sorry Not maney enough'], 404);
                 }
                else{
                    $price=$total-$public1;
                    $data=User::where('id',$reservation['id'])->update([
                        'wallet'=>$price,

                     ]);
                     $reservation->save();
            
                   return response()->json(['message' => 'Reservation successfully'], 200);
                }
              
            }
               

    }
       
    
        

