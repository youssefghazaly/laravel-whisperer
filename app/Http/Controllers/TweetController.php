<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function store(){

        $attributes=request()->validate([
            'body'=>'required' 
        ]);


        Tweet::create([
        'user_id'=>auth()->user()->id,
        'body'=>$attributes['body']
        ]);
        return redirect('/home');
    }
}
