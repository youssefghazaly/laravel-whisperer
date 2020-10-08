<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class FollowController extends Controller
{
    public function store(User $user){
   
       
        
        auth()->user()->toggleFollowable($user);
       

        return back();
    }
    public function update(User $user){
     
       $attributes=request()->validate( [
            'username' => ['required', 'string', 'max:255',Rule::unique('users','username')->ignore($user->id),'alpha_dash'],
            'avatar'=>['file'],
            'name' => [ 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255', Rule::unique('users','email')->ignore($user->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if(request('avatar'))
        {
        $rr=request('avatar')->store('avatars');
        $attributes['avatar']=$rr;
        
        }
        $attributes['password']=Hash::make(request('password'));
        $user->update($attributes);
        
        return redirect($user->path());

    }
}
