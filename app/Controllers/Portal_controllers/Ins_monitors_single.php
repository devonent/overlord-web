<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Ins_monitors_single extends BaseController {
    private $breadcrumb;

    public function index($monitor_name) {
        $monitor_table = new \App\Models\Tabla_monitor();
        $monitor = $monitor_table->get_portal_details_monitor($monitor_name);
        if($monitor != NULL){
            return $this->create_view('portal_views/ins_monitors_single', $this->load_data($monitor));
        }//end if monitor exists
        else{
            return $this->create_view('portal_views/error_404');
        }//end else monitor exists
    }//end index function

    private function load_data($monitor){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Monitores';
        $data['monitor'] = $monitor;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'instrumentos/monitores');
        $this->breadcrumb->add_breadcrumb('Monitores', 'instrumentos/monitores');
        $this->breadcrumb->add_breadcrumb($monitor->marca . ' ' . $monitor->modelo, '#!');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_MONITORS_SINGLE_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Ins_monitors_single class
