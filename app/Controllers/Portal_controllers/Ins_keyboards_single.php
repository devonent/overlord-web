<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Ins_keyboards_single extends BaseController {
    private $breadcrumb;

    public function index($keyboard_name) {
        $keyboard_table = new \App\Models\Tabla_teclado();
        $keyboard = $keyboard_table->get_portal_details_keyboard($keyboard_name);
        if($keyboard != NULL){
            return $this->create_view('portal_views/ins_keyboards_single', $this->load_data($keyboard));
        }//end if keyboard exists
        else{
            return $this->create_view('portal_views/error_404');
        }//end else keyboard exists
    }//end index function

    private function load_data($keyboard){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Teclados';
        $data['keyboard'] = $keyboard;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'instrumentos/teclados');
        $this->breadcrumb->add_breadcrumb('Teclados', 'instrumentos/teclados');
        $this->breadcrumb->add_breadcrumb($keyboard->marca . ' ' . $keyboard->modelo, '#!');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_KEYBOARDS_SINGLE_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Ins_keyboards_single class
