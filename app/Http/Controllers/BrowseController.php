<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BrowseController extends Controller {
    public function showBrowsePage() {
        return View::make("pages/browse");
    }
}
