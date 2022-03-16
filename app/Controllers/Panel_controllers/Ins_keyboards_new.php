<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_keyboards_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_KEYBOARDS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_keyboards_new', $this->load_data());
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

        $data['section_name'] = 'Registrar batería nueva';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/teclados');
        $this->breadcrumb->add_breadcrumb('Teclados', 'panel/teclados');
        $this->breadcrumb->add_breadcrumb('Registrar teclado', 'panel/teclados');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Marcas de teclados
        $data['brands'] = array(
            1 => "Casio",
            2 => "Alesis",
            3 => "Yamaha",
            4 => "Roland Go",
            5 => "Korg"
        );

        //Marcas de teclados
        $data['monitors'] = array(
            1 => "N/A",
            2 => "LCD",
            3 => "LED"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_KEYBOARDS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function
}//end Dashboard class