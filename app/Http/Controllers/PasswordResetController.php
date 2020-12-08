<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PasswordResetController extends Controller {
    public function show() {
        return View::make("pages/forgot-password");
    }

    public function store() {
        return response("Not implemented yet", 405);
    }
}
