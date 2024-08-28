<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function signup(){

        return view('auth.client.signup');

    }

    public function postSignup(SignupRequest $request){


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = User::USER_ROLE_CLIENT;
        $user->password = bcrypt($request->input('password'));
        $registeredUser = $user->save();

        if($registeredUser){
            return redirect()->route('home')->with('success','Registered succesfully');
        }else {

            return back()->with('fail','Something wrong try again');
        }

    }







    public function login(){


        return view('auth.client.login');
    }

    public function postLogin(LoginRequest $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){

            return redirect()->route('home')->with('success','Logged in Succesfully');

        }else{
            return back()->with('fail','Wrong credentials');
        }


    }

    public function userRedirect(){
        if(auth()->user()->role == User::USER_ROLE_SELLER){
            return redirect()->route('showSellerDashboard')->with('success','Logged in Succesfully');
            }elseif(auth()->user()->role == User::USER_ROLE_ADMIN){
                return redirect()->route('showAdminDashboard')->with('success','Logged in Succesfully');
            }else{
                // implement logic to handle users from ecormece
                return redirect()->route('index')->with('','');
            }

    }

    public function logout(){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function adminLogin(){


        return view('auth.admin.login');
    }


    public function adminPostLogin(LoginRequest $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            if(auth()->user()->role == User::USER_ROLE_CLIENT){
            return redirect()->route('showClientDashboard')->with('success','Logged in Succesfully');
            }elseif(auth()->user()->role == User::USER_ROLE_ADMIN){
                return redirect()->route('showAdminDashboard')->with('success','Logged in Succesfully');
            }
        }else{
            return back()->with('fail','Wrong credentials');
        }


    }

}
