<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Followable;
use App\Traits\Likable;
use App\Models\Like;

class User extends Authenticatable
{
    use HasFactory, Notifiable,Followable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','avatar','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userTweet(){
        return Tweet::where('user_id',$this->id)->latest()->get();
    }
    public function timeline(){
        $ids=$this->follows->pluck('id');
        $ids->push($this->id);

        return Tweet::whereIn('user_id',$ids)->orWhere('user_id',$this->id)->withLikes()->latest()->get();
    }
    public function path($append=''){
        $path=route('profile',$this->username);
        return $append? "{$path}/{$append}" : $path;
    }
   
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function getPasswordAttribute($value){
        
        $this->attributes['password']= bcrypt($value);
         return $value;
    }
    public function getAvatarAttribute($value){
    
  if( $value)
 return asset('storage/'.$value) ;
   
  return asset('/images/defaultavatar.jpg');
    }
}
