<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

use Illuminate\Notifications\Notifiable;


class admin extends Authenticatable
{
    use  HasApiTokens,HasFactory,Notifiable;
    protected $fillable = [
        'full_name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function event(){
        return $this->hasMany(event::class,'admin_id');
                  }
}
