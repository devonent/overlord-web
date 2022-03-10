<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Home extends BaseController {
    private $breadcrumb;

    public function index() {
        return $this->create_view('portal_views/index', $this->load_data());
    }//end index function

    private function load_data(){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Inicio';
        
        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_HOME_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Home class
