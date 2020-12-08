<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LoginController extends Controller {
    public function show() {
        return View::make("pages/login");
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            "username" => "required",
            "password" => "required",
        ], [
            "username.required" => "Username required",
            "password.required" => "Password required",
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt([
            "username" => $request->get("username"),
            "password" => $request->get("password")
        ], true)) {
            //return "pog";
            return redirect("/");
        } else {
            return "not pog";
        }
    }

    public function destroy() {
        Auth::logout();
        return redirect("/");
    }
}
