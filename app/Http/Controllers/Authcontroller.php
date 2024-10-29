<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegestiesRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\RegisterResource;
use App\Http\Resources\LoginResource;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class Authcontroller extends BaseController
{
    public function user_register(RegestiesRequest $request){
        $input =$request->all();
        $input['password']=bcrypt($input['password']);
        $input['activation_token']=str::random(60);      
        $user=user::query()->create($input);
        
        $accessToken = $user->createToken('MyApp',['user'])->accessToken;
       $data['token'] = $accessToken;
        $data['user']= new RegisterResource($user);
        return $this->sendResponse($data, "Registration Done");

       
    }
    
    
   public function user_login(LoginRequest $request){
        $log=request(['email','password']);
        if(auth()->guard('user')->attempt($request->only('email','password'))){
        config(['auth.guards.api.provider'=>'user']);
        $user=user::query()->select('users.*')->find(auth()->guard('user')->user()['id']);
        $seccess=$user;
        $seccess['token']= $user->createToken('MyApp',['user'])->accessToken;
        $seccess['user']= new LoginResource($user);
        return $this->sendResponse($seccess, "Logining Done");
        }else {
            return $this->sendError('User not authenticated', [], 401);
        }

    }
    
    
    public function user_logout(Request $request){
        $seccess=Auth::guard('user-api')->user()->token()->revoke();
        return $this->sendResponse($seccess, "Loging out Done");
    }
    public function user_profile(){
        $user_data=Auth()->user();
        return $this->sendResponse($user_data, "profile me Done");
    }
   
    public function admin_login(LoginRequest $request){
        $log=request(['email','password']);
        if(auth()->guard('admin')->attempt($request->only('email','password'))){
        config(['auth.guards.api.provider'=>'admin']);
        $user=admin::query()->select('admins.*')->find(auth()->guard('admin')->user()['id']);
        $seccess=$user;
        $seccess['token']= $user->createToken('MyApp',['admin'])->accessToken;
        $seccess['admin']= new LoginResource($user);
        return $this->sendResponse($seccess, "Logining Done");
        }else {
            return $this->sendError('Admin not authenticated', [], 401);
        }

    }
    public function admin_logout(Request $request){
        $seccess=Auth::guard('admin-api')->user()->token()->revoke();
        return $this->sendResponse($seccess, "Loging out Done");
    }
    public function admin_profile(){
        $user_data=Auth()->user();
        return $this->sendResponse($user_data, "profile me Done");
    }
    }

