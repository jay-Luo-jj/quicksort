<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HelloWorldController extends Controller {
    public function testPage() {
        return View::make("pages/test");
    }
    public function testPagePost(Request $request) {
        return $request->get("test") . $request->get("test2");
    }
}
