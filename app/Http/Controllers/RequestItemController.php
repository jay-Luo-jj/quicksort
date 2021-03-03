<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class RequestItemController extends Controller {
    public function show() {
        return View::make("pages/request-item");
    }
}
