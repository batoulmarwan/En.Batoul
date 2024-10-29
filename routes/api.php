<?php

use App\Http\Controllers\BookingHall;
use App\Http\Controllers\PuplicEventController;
use App\Http\Controllers\ServeController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CreatEventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscriptionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/user_register',[AuthController::class,'user_register']);
Route::post('/user_login',[AuthController::class,'user_login']);
Route::post('/admin_login',[AuthController::class,'admin_login']);


Route::group(['prefix'=>'user','middleware'=>['auth:user-api','scopes:user']],function (){
    Route::post('/user_logout',[AuthController::class,'user_logout']);
    Route::get('/user_profile',[AuthController::class,'user_profile']);
    Route::get('/type_event',[EventController::class,"type_event"]);
    Route::post('/gettown',[CreatEventController::class,"gettown"]);
    Route::post('/getarea',[CreatEventController::class,"getarea"]);
    Route::post('/getbudget',[CreatEventController::class,"getbudget"]);
    Route::post('/gethall',[CreatEventController::class,"gethall"]);
    Route::post('/getDateWork', [BookingHall::class,'getDateWork']);
    Route::post('/getmonth',[BookingHall::class,"getmonth"]);
    Route::post('/dateOnly', [BookingHall::class,'dateOnly']);
    Route::post('/bookingdate', [BookingHall::class,'bookingdate']);
    Route::post('/getMusic',[ServeController::class,"getMusic"]);
    Route::post('/getfood',[ServeController::class,"getfood"]);
    Route::post('/getdecore',[ServeController::class,"getdecore"]);
    Route::post('/discripition',[DiscriptionController::class,"discripition"]);
    Route::post('/booking',[BookingHall::class,"booking"]);
    Route::post('/getbookpuplic',[ServeController::class,"getbookpuplic"]);
    Route::post('/getprice',[DiscriptionController::class,"getprice"]);
Route::get('/getName',[ServeController::class,"getName"]);
Route::get('/getdiscription',[ServeController::class,"getdiscription"]);
});
Route::group(['prefix'=>'admin','middleware'=>['auth:admin-api','scopes:admin']],function (){
    
    Route::post('/admin_logout',[AuthController::class,'admin_logout']);
    Route::get('/admin_profile',[AuthController::class,'admin_profile']);
    Route::post('/addEventPuplic',[PuplicEventController::class,"addEventPuplic"]);
    Route::get('/getPlace',[PuplicEventController::class,"getPlace"]);
    Route::post('/getMusic',[PuplicEventController::class,"getMusic"]);
Route::post('/updateTypeMusic/{id}',[PuplicEventController::class,"updateTypeMusic"]);
Route::post('/updateSinge/{id}',[PuplicEventController::class,"updateSinge"]);
Route::post('/updateMore/{id}',[PuplicEventController::class,"updateMore"]);
Route::post('/getfoodAdmin',[PuplicEventController::class,"getfoodAdmin"]);
Route::post('/updateMainMeal/{id}',[PuplicEventController::class,"updateMainMeal"]);
Route::post('/updateSweet/{id}',[PuplicEventController::class,"updateSweet"]);
Route::post('/updateCake/{id}',[PuplicEventController::class,"updateCake"]);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('/GovernorateById',[EventController::class,"GovernorateById"]);


Route::post('/getboll1',[ServeController::class,"getboll1"]);
Route::post('/storeIds',[DiscriptionController::class,"storeIds"]);
// Route::post('/getprice',[DiscriptionController::class,"getprice"]);
// Route::get('/getName',[ServeController::class,"getName"]);
// Route::get('/getdiscription',[ServeController::class,"getdiscription"]);