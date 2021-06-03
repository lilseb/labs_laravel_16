<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



class SettingProfileController extends Controller
{
    public function updateProfile(Request $request){
        
        if ($request->has("nameUpdate")) { 
        // POUR LE NOM ET L"EMAIL //
            if ($request->name == null && $request->email == null) {
                return back();
            } elseif ($request->name == null) {
                $request->validate([
                    "email" => ["string","email","max:255","unique:users"]
                ]);
                DB::table("users")->update([
                    "email"=>$request->email,
                ]);
            } elseif ($request->email == null) {
                $request->validate([
                    "name"  => "string|max:255",
                ]);
                DB::table("users")->update([
                    "name"=>$request->name,
                ]);
            } else {
                $request->validate([
                    "email" => ["string","email","max:255","unique:users"],
                    "name"  => "string|max:255",
                ]);
                DB::table('users')->update([
                    "email"=>$request->email,
                    "name"=>$request->name,
                ]);
            }
            return redirect()->back()->with("success" , "save done");
        } 
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        if ($request->has("passwordUpdate")) {
            $checkPassword = Hash::check($request->current_password, $user->password);
            if ($checkPassword) {            
                $request->validate([
                    "password"=> ["required", "confirmed", Rules\Password::min(8)]
                ]);
                DB::table("users")->update([
                    "password"=>Hash::make($request->password)
                ]);
                return redirect()->back()->with("success" , "save done");
            } else {
                return back()->with("fail" , "wrong password");
            }
        }
    }

    public function destroyProfile(Request $request){
        $user = Auth::user();
        if ($request->has("deleteProfile")) {
            // POUR SUPPRIMER LE COMPTE //
            $checkPassword = Hash::check($request->password, $user->password);
            if ($checkPassword) {
                $user->delete();
                return redirect()->route("home")->with("success" , "your account has been deleted"); 
            } else {
                return back()->with("fail" , "wrong password");
            }
        }
    }    
}
