<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(){
        return view("Auth.Login");
    }

    function register(){
        return view("Auth.Register");
    }

    function userRegistration(){
        $validation = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'password' => 'required'
        ]);

        if($validation){
            $name = $validation['name'];
            $email = $validation['email'];
            $password = $validation['password'];
            
            $image = $validation['image'];
            $imageName = uniqid() . "_" . $image->getClientOriginalName();
            $image->move(public_path('image/profile'),$imageName);
            
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->image = $imageName;
            $user->password = Hash::make($password);
            $user->save();
            
            if(Auth::attempt(['email' => $email, 'password' => $password])){
                return redirect()->route('home');
            }
        }else{
            return back()->withErrors($validation);
        }
    }

    function userLogin(){
        $validation = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validation){
            $email = $validation['email'];
            $password = $validation['password'];
            $auth = Auth::attempt(['email' => $email, 'password' => $password]);

            if($auth){
                return redirect()->route('home');
            }else{
                return back()->with('error', 'Authentication Fail!!!');
            }

        }else{
            return back()->withErrors($validation);
        }
    }

    function logout(){

        Auth::logout();
        return redirect()->route('login');
    }
}
