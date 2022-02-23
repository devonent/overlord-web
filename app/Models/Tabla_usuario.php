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
        'id_rol',
    ];

    public function login_user($email = '', $pass = '') {
        $query = $this->select('id_usuario, nombre, apellido_p, apellido_m, sexo, email, imagen, id_rol')
                        ->where('email', $email)
                        ->where('password', $pass)
                        ->first();
        return $query;
    }//end login_user function
}//end class Tabla_usuario
