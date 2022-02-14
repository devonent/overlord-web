<?php

namespace App\Controllers\Public_controllers;
use App\Controllers\BaseController;

class About extends BaseController {
    public function site() {
        return view('public_views/site');
    }//end site function

    public function author() {
        return view('public_views/author');
    }//end author function
}
