<?php

namespace App\Controllers\Portal_controllers;
use App\Controllers\BaseController;

class Home extends BaseController {

    public function index() {
        return $this->create_view('portal_views/index', $this->load_data());
    }//end index function

    private function load_data(){

        $data = array();
        $data['section_name'] = 'Inicio';

        // Datos de guitarras para listado dinámico
        $guitar_table = new \App\Models\Tabla_guitarra();
        $data['new_guitars'] = $guitar_table->get_home_guitars();

        // Datos de baterías para listado dinámico
        $drums_table = new \App\Models\Tabla_bateria();
        $data['new_drums'] = $drums_table->get_home_drums();

        // Datos de teclados para listado dinámico
        $keyboards_table = new \App\Models\Tabla_teclado();
        $data['new_keyboards'] = $keyboards_table->get_home_keyboards();

        // Datos de monitores para listado dinámico
        $monitors_table = new \App\Models\Tabla_monitor();
        $data['new_monitors'] = $monitors_table->get_home_monitors();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar(PORTAL_HOME_TASK);
        return view($view_name, $content);
    }//end create view function
}//end Home class
