<?php

namespace App\Models;
use CodeIgniter\Model;

class Tabla_teclado extends Model {
    protected $table = 'ins_teclado';
    protected $primaryKey = 'id_teclado';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_teclado',
        'precio',
        'stock',
        'marca',
        'modelo',
        'acabado_color',
        'monitor',
        'no_teclas',
        'anchura_mm',
        'altura_mm',
        'profundidad_mm',
        'descripcion',
        'imagen'
    ];

    public function get_datatable_keyboards() {
        $query = $this->select('id_teclado, precio, stock, marca, modelo, no_teclas, anchura_mm, altura_mm, profundidad_mm')
                        ->findAll();
        return $query;
    }
}//end class Tabla_teclado
