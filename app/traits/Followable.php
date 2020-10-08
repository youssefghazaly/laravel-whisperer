<?php

namespace App\Traits;
use App\models\User;

trait Followable{
public function following(User $user){
  return $this->follows->contains($user);

}

public function toggleFollowable(User $user){
  if($this->following($user))
  {
       return $this->unfollow($user);
  }
  return $this->follow($user);

}
public function follows(){
  
    return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
}

public function follow(User $user){
    return $this->follows()->save($user);
}
public function unfollow(User $user){
  return $this->follows()->detach($user);
}
}