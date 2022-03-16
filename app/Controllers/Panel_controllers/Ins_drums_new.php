<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_drums_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_DRUMS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_drums_new', $this->load_data());
        }//end if not allowed
        else {
            create_user_message('No cuentas con los permisos suficientes para acceder a esta sección...', 'warning');
            return redirect()->to(route_to('panel/dashboard'));
        }//end else not allowed
    }//end index function

    private function load_data() {
        $data = array();
        //Session elements
        $session = session();
        $data['user_name'] = $session->user_name;
        $data['user_full_name'] = $session->user_full_name;
        $data['user_img'] = $session->user_img;
        $data['user_sex'] = $session->user_sex;
        $data['user_role'] = $session->user_rol;

        $data['section_name'] = 'Registrar batería nueva';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/baterias');
        $this->breadcrumb->add_breadcrumb('Baterías', 'panel/baterias');
        $this->breadcrumb->add_breadcrumb('Registrar batería', 'panel/baterias');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Materiales de carcasa
        $data['body'] = array(
            1 => "Tilo",
            2 => "Abedul",
            3 => "Arce",
            4 => "Acrílico",
            5 => "Triplay",
            6 => "Álamo",
            7 => "Abedul"
        );

        //Marcas de baterías
        $data['brands'] = array(
            1 => "DDrum",
            2 => "Yamaha",
            3 => "Tama",
            4 => "Pearl",
            5 => "Stagg",
            6 => "Pearl",
            7 => "Mapex",
            8 => "WHD",
            9 => "Natal",
            10 => "Dixon"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_DRUMS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function
}//end Dashboard class