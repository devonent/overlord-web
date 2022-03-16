<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Portal_breadcrumb;

class Login extends BaseController {
    private $breadcrumb;

    public function index() {
        return $this->create_view('panel_views/login', $this->load_data());
    }//end index function

    private function load_data(){
        $this->breadcrumb = new Portal_breadcrumb();

        $data = array();
        $data['section_name'] = 'Iniciar sesión';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Inicio', '/');
        $this->breadcrumb->add_breadcrumb('Iniciar sesión', 'instrumentos/baterias');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()) {
        $content['menu'] = generate_portal_navbar();
        return view($view_name, $content);
    }//end create_view function

    public function check_user() {
        $session = session();

        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');

        $tabla_usuarios = new \App\Models\Tabla_usuario;
        $user_data = $tabla_usuarios->login_user($email, $pass);

        if($user_data != null) {
            $session->set('id_user', $user_data->id_usuario);
            $session->set('user_name', $user_data->nombre);
            $session->set('user_full_name', $user_data->nombre . ' ' . $user_data->apellido_p);
            $session->set('user_sex', $user_data->sexo);
            $session->set('user_email', $user_data->email);
            $session->set('user_img', $user_data->imagen);
            $session->set('id_rol', $user_data->id_rol);
            $session->set('user_rol', $user_data->rol);
            
            return redirect()->to(route_to('panel/dashboard'));
        }//end if si existe el usuario
        else {
            create_user_message('Su usuario y/o contraseña son incorrectas...', 'warning');
            return redirect()->to(route_to('login'));
        }//end else si existe el usuario
    }//end check_user function
}
