<?php

namespace App\Controllers\Private_controllers;
use App\Controllers\BaseController;

class Login extends BaseController {
    public function index() {
        return view('private_views/login');
    }//end index function

    public function check_user() {
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');

        $tabla_usuarios = new \App\Models\Tabla_usuario;
        $user_data = $tabla_usuarios->login_user($email, $pass);
        if($user_data != null) {
            echo 'Bienvenido/a '.$user_data->nombre;
        } else {
            echo 'Acceso denegado...';
        }
    }//end check_user function
}
