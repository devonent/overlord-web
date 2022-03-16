<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_guitars_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_GUITARS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_guitars_new', $this->load_data());
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
        $data['user_img'] = $session->user_img;

        $data['section_name'] = 'Registrar guitarra nueva';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Guitarras', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Registrar guitarra', 'panel/guitarras');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Materiales del cuerpo
        $data['body'] = array(
            1 => "Caoba",
            2 => "Tapa de grano de arce acolchado con cuerpo de álamo",
            3 => "Fresno",
            4 => "Aliso",
            5 => "Triplay Arce/Álamo/Arce",
            6 => "Arce",
            7 => "Tilo",
            8 => "Arce/Caoba",
            9 => "Caoba africana y Arce rizado",
            10 => "Álamo"
        );

        //Materiales del mastil
        $data['neck'] = array(
            1 => "Caoba",
            2 => "Caoba",
            3 => "Arce",
            4 => "Arce/Nogal",
            5 => "Palisandro Indio Oriental",
            6 => "Arce GRX"
        );

        //Materiales del diapasón
        $data['fretboard'] = array(
            1 => "Palo de rosa",
            2 => "Ébano",
            3 => "Corazón Púrputa",
            4 => "Arce",
            5 => "Palo de rosa",
            6 => "Jatoba",
            7 => "Laurel Indio",
            8 => "Laminado de álamo",
            9 => "Arce/Ébano"
        );
        
        //Marcas de guitarras
        $data['brands'] = array(
            1 => "Gibson",
            2 => "Epiphone",
            3 => "Ibanez",
            4 => "Hartwood",
            5 => "Jackson",
            6 => "PRS",
            7 => "Gear4music"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_GUITARS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function
}//end Dashboard class