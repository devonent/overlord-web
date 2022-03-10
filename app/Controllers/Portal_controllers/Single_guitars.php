<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Single_guitars extends BaseController {
    private $breadcrumb;

    public function guitar001() {
        return $this->create_view('portal_views/single_products/guitar001-details', $this->load_data('Gibson SG Standard'));
    }//end guitar001 function

    public function guitar002() {
        return $this->create_view('portal_views/single_products/guitar002-details', $this->load_data('Epiphone Les Paul Custom'));
    }//end guitar002 function

    public function guitar003() {
        return $this->create_view('portal_views/single_products/guitar003-details', $this->load_data('Ibanez GRGA120QA GIO'));
    }//end guitar003 function

    public function guitar004() {
        return $this->create_view('portal_views/single_products/guitar004-details', $this->load_data('Ibanez RG421AHM'));
    }//end guitar004 function

    public function guitar005() {
        return $this->create_view('portal_views/single_products/guitar005-details', $this->load_data('Ibanez PIA3761'));
    }//end guitar005 function

    private function load_data($nombre_producto = ''){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Detalles del producto';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'instrumentos/guitarras');
        $this->breadcrumb->add_breadcrumb('Guitarras', 'instrumentos/guitarras');
        $this->breadcrumb->add_breadcrumb($nombre_producto, '#!');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();
        
        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_INS_GUITARS_TASK);
        return view($view_name, $content);
    }//end create view function

}//end Single_guitars class
