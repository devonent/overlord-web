<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;

class Ins_drums extends BaseController {
    private $is_allowed = TRUE;

    public function __construct() {
        $session = session();
        if(!Permissions::is_role_allowed(INS_DRUMS_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_drums', $this->load_data());
        }//end if not allowed
        else {
            return redirect()->to(route_to('login'));
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
        
        switch ($session->id_rol) {
            case ADMIN_ROLE['id']:
                $data['user_role'] = ADMIN_ROLE['nombre'];
                break;

            case OPERATOR_ROLE['id']:
                $data['user_role'] = OPERATOR_ROLE['nombre'];
                break;
                
            case USER_ROLE['id']:
                $data['user_role'] = USER_ROLE['nombre'];
                break;
            
            default:
                
                break;
        }//end switch determine role

        $data['section_name'] = 'Baterías';

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_DRUMS_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function
}//end Dashboard class