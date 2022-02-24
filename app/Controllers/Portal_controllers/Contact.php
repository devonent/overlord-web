<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Contact extends BaseController {
    public function index() {
        return view('portal_views/contact');
    }
}
