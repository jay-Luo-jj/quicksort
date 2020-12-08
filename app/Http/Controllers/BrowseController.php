<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class BrowseController extends Controller {
    public function index() {
        return View::make("pages/browse");
    }
}
