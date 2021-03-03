<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ConfirmItemController extends Controller {
    public function show() {
        return View::make("pages/item-confirmed");
    }
}
