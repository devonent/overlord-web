<?php

namespace App\Models;
use CodeIgniter\Model;

class Tabla_usuario extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_usuario',
        'nombre',
        'apellido_p',
        'apellido_m',
        'sexo',
        'email',
        'password',
        'imagen',
        'id_rol'
    ];

    public function login_user($email = '', $pass = '') {
        $query = $this->select('id_usuario, nombre, apellido_p, apellido_m, sexo, email, imagen, usuario.id_rol, rol')
                        ->join('rol', 'usuario.id_rol = rol.id_rol')
                        ->where('email', $email)
                        ->where('password', $pass)
                        ->first();
        return $query;
    }// end login_user function

    public function get_all_users() {
        $query = $this->select('id_usuario, nombre, apellido_p, apellido_m, sexo, email, rol')
                        ->join('rol', 'usuario.id_rol = rol.id_rol')
                        ->orderBy('id_usuario', 'ASC')
                        ->findAll();
        return $query;
    }// end get_all_users function

    public function get_single_user($id_user) {
        $query = $this->select('id_usuario, nombre, apellido_p, apellido_m, sexo, email, imagen, id_rol')
                        ->where('id_usuario', $id_user)
                        ->first();
        return $query;
    }// end get_single_user
}//end class Tabla_usuario
