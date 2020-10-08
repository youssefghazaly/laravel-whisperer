<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function show(User $user){
      
   $tweets=auth()->user()->timeline();
   
   return view('profile.show',compact('user','tweets'));

   }
   public function edit(User $user)
   {
      return view('profile.edit',compact('user'));
   }
}
