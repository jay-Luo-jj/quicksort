<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class HelloWorldController extends Controller {
    public function testPage() {
        return View::make("pages/test");
    }
    public function testPagePost(Request $request) {
        $username = $request->get("test");
        $name = $request->get("test2");

        $user = User::where("username", $username)->first();
        $user->update([
            "name" => $name
        ]);

        return View::make("pages/test")->with([
            "email" => $user->email
        ]);
    }
}
