<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;

class Dashboard extends BaseController {
    public function index() {
        return view('panel_views/index');
    }
}