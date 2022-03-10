<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Author extends BaseController {
    private $breadcrumb;

    public function index() {
        return $this->create_view('portal_views/author', $this->load_data());
    }//end index function

    private function load_data(){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'El autor';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Acerca de', 'acerca/autor');
        $this->breadcrumb->add_breadcrumb('El autor', 'acerca/autor');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_ABOUT_AUTHOR_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Author class
