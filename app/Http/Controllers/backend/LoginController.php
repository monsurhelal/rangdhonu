<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showloginpage(){
        return view('backend.pages.login.login');
    }
    public function login(AdminLoginRequest $request){

        $credential = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($credential)){
            return redirect()->route('admin.dashboard');
        }else{

            Session::flash('error','email or password is invalid');

            return redirect()->route('admin.login');
        }
    }
}
