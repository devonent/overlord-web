<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Gallery extends BaseController {
    public function index() {
        return view('portal_views/gallery');
    }
}
