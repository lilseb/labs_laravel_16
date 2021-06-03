<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllAuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function register(){
        return view('backend.auth.register');
    }

    public function forgotPassword(){
        return view('backend.auth.forgotPassword');
    }

    public function reset(){
        return view('backend.auth.resetForgotPassword');
    }

    public function profile(){
        return view('backend.auth.profile');
    }

    public function settingProfile(){
        return view('backend.auth.settingProfile');
    }

}
