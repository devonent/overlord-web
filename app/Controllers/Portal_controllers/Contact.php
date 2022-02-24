<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Contact extends BaseController {
    public function index() {
        return $this->create_view('portal_views/contact', $this->load_data());
    }//end index function

    private function load_data(){
        $data = array();
        $data['section_name'] = 'Contacto';
        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_CONTACT_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Contact class

