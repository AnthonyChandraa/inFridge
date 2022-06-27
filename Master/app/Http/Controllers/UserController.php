<?php

namespace App\Http\Controllers;

use App\Models\Fridge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index_login(){
        return view('auth.login');
    }

    public function index_register(){
        return view('auth.register');
    }

    public function login(Request $request){
        $creds=$request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ]);

        if(!Auth::attempt($creds)){
            return redirect()->back()->withErrors(['not_authenthicated' => 'Invalid Credentials']);
        }else{
            return redirect('/');
        }
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|min:4|max:20',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'conf-password' => 'required|min:8|max:20|same:password',
            'terms' => 'required'
        ],[
            'conf-password.same' => 'Password Mismatch',

        ]);
        $userID = Str::random(32);

        $user= new User();
        $user->id=$userID;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();

        $fridge = new Fridge();
        $fridge->id=Str::uuid();
        $fridge->user_id=$userID;
        $fridge->capacity=30;
        $fridge->save();

        return redirect()->route('login_page');
    }
}
