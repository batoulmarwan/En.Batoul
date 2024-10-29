<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dateHall;
use App\Models\dateWork;
use App\Models\User;

class BookingHall extends BaseController
{
    public function getDateWork(Request $request){
        $place_id=$request->input('place_id');
        $month=$request->input('month');
        $date=$request->input('date');
        $date_start=$request->input('date_start');
        $date_finish=$request->input('date_finish');
       //$data =event::with(['place'])
        $date=dateWork::where('place_id',$place_id)
        ->where('month',$month)
        ->get();
        //->pluck('place.name')
        //->unique();
        if ($date->isEmpty()) {
            return $this->sendError("error", [], 404);
        }
       return $this->sendResponse($date, "successfully");
    }
    public function getmonth(Request $request){
        $place_id = $request->input('place_id');
        $dates = dateWork::where('place_id', $place_id)
        ->distinct('month')
        ->pluck('month')
        ->toArray();
        if (empty($dates)) {
            return $this->sendError("No available dates", [], 404);
        }
       // return $this->sendResponse($dates, "month successfully");
       return response()->json([
        'success'=>true,
        'massege'=>'month is successfuly',
        'month'=>$dates,
        'erros'=>null,
        'status'=>200
    ]);
    }
    //الاوقات المتاحة فقط
    public function dateOnly(Request $request)
{
    $place_id = $request->input('place_id');
    $month = $request->input('month');
    $date = $request->input('date');
    $date_start = $request->input('date_start');
    $date_finish = $request->input('date_finish');

    $dates = dateWork::where('place_id', $place_id)
        ->where('month', $month)
        ->where('status', '<>', 'yes') // تحقق من أن الحالة ليست "yes"
        ->get();

    if ($dates->isEmpty()) {
        return $this->sendError("No available dates", [], 404);
    }

    return $this->sendResponse($dates, "Dates retrieved successfully");
}
//الحجز
   public function bookingdate(Request $request){
    $reservationId = $request->input('id');
    $Date = $request->input('date');

    $reservation = dateWork::find($reservationId);

    if (!$reservationId) {
        return response()->json(['message' => 'Reservation not found'], 404);
    }

    if ($reservation->custom_date === $Date && $reservation->status === 'no') {
        $reservation->status = 'yes';
        $reservation->save();
        return response()->json(['message' => 'Reservation status updated successfully'], 200);
    }

    return response()->json(['message' => 'Cannot update reservation status'], 400);
}
public function booking(Request $request){
    $reservationId = $request->input('pricetotal');
    //$Date = $request->input('date');

    $reservation =auth()->user();
     $total=$reservation['wallet'];

    if ($reservationId>$total) {
        return response()->json(['message' => 'Sorry Not maney enough'], 404);
    }
    else{
        $price=$total-$reservationId;
        $data=User::where('id', $reservation['id'])->update([
            'wallet'=>$price,
            
           
         ]);
        $reservation->save() ;
       return response()->json(['message' => 'Reservation successfully'], 200);
    }}
}
