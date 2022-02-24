<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class About extends BaseController {
    public function site() {
        return view('portal_views/site');
    }//end site function

    public function author() {
        return view('portal_views/author');
    }//end author function
}
