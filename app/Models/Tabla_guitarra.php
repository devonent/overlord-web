<?php

namespace App\Models;
use CodeIgniter\Model;

class Tabla_guitarra extends Model {
    protected $table = 'ins_guitarra';
    protected $primaryKey = 'id_guitarra';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_guitarra',
        'precio',
        'stock',
        'marca',
        'modelo',
        'acabado_color',
        'cuerpo',
        'mastil',
        'diapason',
        'no_trastes',
        'no_cuerdas',
        'descripcion',
        'imagen'
    ];

    public function get_datatable_guitars() {
        $query = $this->select('id_guitarra, precio, stock, marca, modelo, cuerpo, no_cuerdas, no_trastes')
                        ->findAll();
        return $query;
    }
}//end class Tabla_guitarra
