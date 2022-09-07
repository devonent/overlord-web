<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Ins_guitars_single extends BaseController {
    private $breadcrumb;

    public function index($guitar_name) {
        $guitar_table = new \App\Models\Tabla_guitarra();
        $guitar = $guitar_table->get_portal_details_guitar($guitar_name);
        if($guitar != NULL){
            return $this->create_view('portal_views/ins_guitars_single', $this->load_data($guitar));
        }//end if guitar exists
        else{
            return $this->create_view('portal_views/error_404');
        }//end else guitar exists
    }//end index function

    private function load_data($guitar){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Guitarras';
        $data['guitar'] = $guitar;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'instrumentos/guitarras');
        $this->breadcrumb->add_breadcrumb('Guitarras', 'instrumentos/guitarras');
        $this->breadcrumb->add_breadcrumb($guitar->marca . ' ' . $guitar->modelo, '#!');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_GUITARS_SINGLE_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Ins_guitars_single class
