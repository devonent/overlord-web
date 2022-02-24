<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Instruments extends BaseController {
    public function guitars() {
        return view('portal_views/ins_guitars');
    }//end guitars function

    public function drums() {
        return view('portal_views/ins_drums');
    }//end drums function

    public function keyboards() {
        return view('portal_views/ins_keyboards');
    }//end keyboards function

    public function monitors() {
        return view('portal_views/ins_monitors');
    }//end monitors function
}
