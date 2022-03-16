<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_monitors_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_MONITORS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_monitors_new', $this->load_data());
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
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/monitores');
        $this->breadcrumb->add_breadcrumb('Monitores', 'panel/monitores');
        $this->breadcrumb->add_breadcrumb('Registrar monitor', 'panel/monitores');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Marcas de monitores
        $data['brands'] = array(
            1 => "Presonus",
            2 => "Mackie",
            3 => "SubZero",
            4 => "ESI",
            5 => "KRK",
            6 => "Neumann",
            7 => "Hercules",
            8 => "Pioneer",
            9 => "JBL",
            10 => "Avantone",
            11 => "Yamaha",
            12 => "Focal",
            13 => "Palmer"
        );

        //Materiales de monitores
        $data['material'] = array(
            1 => "Fibra de densidad media",
            2 => "Metal cepillado",
            3 => "MDF, PVC",
            4 => "Metal",
            5 => "ABS con rejilla metálica",
            6 => "MDF 18mm",
            7 => "MDF Bass Reflex",
            8 => "Paneles MDF",
            9 => "Contrachapado de abedul, MDF",
            10 => "MDF"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_MONITORS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function
}//end Dashboard class