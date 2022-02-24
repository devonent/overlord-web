<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Deals extends BaseController {
    public function index() {
        return view('portal_views/deals');
    }
}
