<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Ins_monitors extends BaseController {
    private $breadcrumb;

    public function index() {
        return $this->create_view('portal_views/ins_monitors', $this->load_data());
    }//end index function

    private function load_data(){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Monitores';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'instrumentos/monitores');
        $this->breadcrumb->add_breadcrumb('Monitores', 'instrumentos/monitores');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_MONITORS_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Ins_monitors class
