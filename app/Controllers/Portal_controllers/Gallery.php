<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Gallery extends BaseController {
    private $breadcrumb;

    public function index() {
        return $this->create_view('portal_views/gallery', $this->load_data());
    }//end index function

    private function load_data(){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Galería';

        // Imagenes guitarra
        $guitar_table = new \App\Models\Tabla_guitarra();
        $data['imagenes'] = $guitar_table->get_gallery_img_guitars();
        
        // Imagenes batería
        $drum_table = new \App\Models\Tabla_bateria();
        $drums = $drum_table->get_gallery_img_drums();
        array_splice( $data['imagenes'], count($data['imagenes']), null, $drums);
        
        // Imagenes teclado
        $keyboard_table = new \App\Models\Tabla_teclado();
        $keyboards = $keyboard_table->get_gallery_img_keyboards();
        array_splice( $data['imagenes'], count($data['imagenes']), null, $keyboards);
        
        // Imagenes monitor
        $monitor_table = new \App\Models\Tabla_monitor();
        $monitors = $monitor_table->get_gallery_img_monitors();
        array_splice( $data['imagenes'], count($data['imagenes']), null, $monitors);

        shuffle($data['imagenes']);
        
        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Galería', 'galeria');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_GALLERY_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Gallery class
