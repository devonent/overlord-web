<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index() {
        return view('public_views/index');
    }
}
