<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function loginCreate(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validateData = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4',
        ]);

        $user = User::where('email',$request->input('email'))->first();

        if ($user && Hash::check($request->input('password'),$user->password)){
            Auth::login($user);

            return redirect()->route('user.index');
        }else{
            return redirect()->back();
        }
    }

    public function registerCreate(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validateData = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|string|min:4',
        ]);
        if ($validateData){
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();
        }
        return redirect()->route('user.index');
    }
}
