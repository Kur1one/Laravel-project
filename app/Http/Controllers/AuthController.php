<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function ShowLoginForm(){
        return view('pages.signin');
    }
    public function login(Request $request) {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)){
            return redirect(route("home"));
        }

        return redirect(route("signin"))->withErrors("email", "User if not found or data was incorrect");
    }

    public function logout(){
        auth("web")->logout();
        return redirect(route("home"));
    }

    public function ShowRegisterForm(){
        return view('pages.registration');
    }

    public function ShowForgotForm(){
        return view('pages.forgot');
    }

    public function forgot(Request $request) {
        $data = $request->validate([
            "email" => ["required", "email", "string", "exists:users"],
        ]);

        $user = User::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $user->password = bcrypt($password);

        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route("home"));
    }

    public function register(Request $request) {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"]
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user) {
            auth("web")->login($user);
        }

        return redirect(route("home"))->with('msg', 'Your order have successfully added');
    }
}
