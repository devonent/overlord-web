<?php

namespace App\Models;
use CodeIgniter\Model;

class Tabla_rol extends Model {
    protected $table = 'rol';
    protected $primaryKey = 'id_rol';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_rol',
        'rol'
    ];

    public function generate_roles_dropdown() {
        $query = $this->select('id_rol, rol')->findAll();

        if($query != NULL) {
            $roles = array();
            foreach ($query as $role) {
                $roles[$role->id_rol] = $role->rol;
            }//end foreach query as rol
            return $roles;
        }//end if query != null
        else {
            return NULL;
        }//end else query != null

        return $query;
    }//end generate_roles_dropdown function
}//end class Tabla_usuario
