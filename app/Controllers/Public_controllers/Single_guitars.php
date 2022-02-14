<?php

namespace App\Controllers\Public_controllers;
use App\Controllers\BaseController;

class Single_guitars extends BaseController {
    public function guitar001() {
        return view('public_views/single_products/guitar001-details');
    }//end guitar001 function

    public function guitar002() {
        return view('public_views/single_products/guitar002-details');
    }//end guitar002 function

    public function guitar003() {
        return view('public_views/single_products/guitar003-details');
    }//end guitar003 function

    public function guitar004() {
        return view('public_views/single_products/guitar004-details');
    }//end guitar004 function

    public function guitar005() {
        return view('public_views/single_products/guitar005-details');
    }//end guitar005 function
}
