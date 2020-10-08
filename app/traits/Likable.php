<?php

namespace App\Traits;
use App\models\User;
use App\models\Like;

use Illuminate\Database\Eloquent\Builder;

trait Likable{
    public function like($user=null,$liked=true){
      
        $this->likes()->updateOrCreate([
            'user_id'=>$user?$user->id:auth()->id(),
            
        ],[
            'liked'=>$liked
        ]);
          
    }
    public function scopeWithLikes(Builder $querry){

   $querry->leftJoinSub(
       'select tweet_id , sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
       'likes',
       'likes.tweet_id',
       'tweets.id'
   );

    }

    public function disLike($user=null){
        return $this->like($user,false);
    }
    public function isLikeBy($user){
        return(bool)  $user->likes->where('tweet_id',$this->id)->where('liked',true)->count();
    }
    public function isDisLikeBy($user){
      
        return (bool)  $user->likes->where('tweet_id',$this->id)->where('liked',false)->count();
   
    }
    public function likes(){

       
     return $this->hasMany(Like::class);
    }

  
}