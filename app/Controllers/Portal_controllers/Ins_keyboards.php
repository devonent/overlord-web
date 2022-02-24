<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Ins_keyboards extends BaseController {
    public function index() {
        return $this->create_view('portal_views/ins_keyboards', $this->load_data());
    }//end index function

    private function load_data(){
        $data = array();
        $data['section_name'] = 'Teclados';
        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_KEYBOARDS_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Ins_keyboards class
