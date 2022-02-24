<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Single_guitars extends BaseController {
    public function guitar001() {
        return $this->create_view('portal_views/single_products/guitar001-details', $this->load_data());
    }//end guitar001 function

    public function guitar002() {
        return $this->create_view('portal_views/single_products/guitar002-details', $this->load_data());
    }//end guitar002 function

    public function guitar003() {
        return $this->create_view('portal_views/single_products/guitar003-details', $this->load_data());
    }//end guitar003 function

    public function guitar004() {
        return $this->create_view('portal_views/single_products/guitar004-details', $this->load_data());
    }//end guitar004 function

    public function guitar005() {
        return $this->create_view('portal_views/single_products/guitar005-details', $this->load_data());
    }//end guitar005 function

    private function load_data(){
        $data = array();
        $data['section_name'] = 'Guitarras';
        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_GUITARS_TASK);
        return view($view_name, $content);
    }//end create view function

}//end Single_guitars class
