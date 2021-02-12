<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class AddItemController extends Controller {
    public function show() {
        return View::make("pages/add-item");
    }
}
