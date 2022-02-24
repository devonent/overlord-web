<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;

class Logout extends BaseController {
    public function index() {
        session()->destroy();
        return redirect()->to(route_to('login'));
    }//end index function
}//end logout class
