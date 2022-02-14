<?php

namespace App\Controllers\Public_controllers;
use App\Controllers\BaseController;

class Contact extends BaseController {
    public function index() {
        return view('public_views/contact');
    }
}
