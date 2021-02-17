<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\Models\User;

class RegisterController extends Controller {
    public function show() {
        return View::make("pages/register");
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            "username" => "required|unique:users,username",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
            "tac-consent" => "required",
        ], [
            "username.required" => "Username required",
            "username.unique" => "Username already in use",
            "email.required" => "Email required",
            "email.email" => "Email must be a valid email",
            "email.unique" => "Email already in use",
            "password.required" => "Password required",
            "password.confirmed" => "Passwords do not match",
            "tac-consent.required" => "You must accept the terms and conditions to register"
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // TODO: Email verification
        $user = User::create([
            "username" => $request->get("username"),
            "password" => $request->get("password"),
            "email" => $request->get("email"),
            "marketing_consent" => $request->get("email-consent") == "on"
        ]);
        Auth::login($user);
        return View::make("pages/post-signup");
    }
}
