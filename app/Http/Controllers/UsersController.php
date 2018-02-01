<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function  index(){
        dd('123');
    }
    public function add(Request $request)
    {
        //dd($request->all());
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password) ;
        $user->gender=$request->gender;
        $user->role=$request->role;
        if($user->save())
        {
            session()->flash('success','User Created Successfully!');
            return redirect()->route('admin_create');
        }
    }

}

