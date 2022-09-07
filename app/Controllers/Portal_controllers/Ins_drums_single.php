<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Ins_drums_single extends BaseController {
    private $breadcrumb;

    public function index($drum_name) {
        $drum_table = new \App\Models\Tabla_bateria();
        $drum = $drum_table->get_portal_details_drum($drum_name);
        if($drum != NULL){
            return $this->create_view('portal_views/ins_drums_single', $this->load_data($drum));
        }//end if drum exists
        else{
            return $this->create_view('portal_views/error_404');
        }//end else drum exists
    }//end index function

    private function load_data($drum){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Baterías';
        $data['drum'] = $drum;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'instrumentos/baterias');
        $this->breadcrumb->add_breadcrumb('Baterías', 'instrumentos/baterias');
        $this->breadcrumb->add_breadcrumb($drum->marca . ' ' . $drum->modelo, '#!');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_DRUMS_SINGLE_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Ins_drums_single class
