<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;

use App\Models\PasswordReset;
use App\Models\User;

class PasswordResetController extends Controller {
    public function show() {
        return View::make("pages/forgot-password");
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" => "email|required",
        ], [
            "email.required" => "Email required",
            "email.email" => "Email must be a valid email",
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::where("email", $request->get("email"))->first();
        if ($user) {
            $token = bin2hex(random_bytes(32));

            PasswordReset::create([
                "email" => $user->email,
                "token" => $token,
            ]);
            Mail::send('emails.password-reset', [
                "token" => $token
            ], function($message) use ($user) {
                $message->to($user->email, $user->username)->subject("Password reset");
            });
        }

        return View::make("pages/password-reset-sent");

        // return $status === Password::RESET_LINK_SENT
        //     ? back()->with(["status" => __($status)])
        //     : back()->withErrors(["email" => __($status)]);
    }
}
