<?php

namespace App\Models;
use CodeIgniter\Model;

class Tabla_monitor extends Model {
    protected $table = 'ins_monitor';
    protected $primaryKey = 'id_monitor';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_monitor',
        'precio',
        'stock',
        'marca',
        'modelo',
        'acabado_color',
        'material',
        'no_monitores',
        'anchura_mm',
        'altura_mm',
        'profundidad_mm',
        'descripcion',
        'imagen'
    ];

    public function get_datatable_monitors() {
        $query = $this->select('id_monitor, precio, stock, marca, modelo, no_monitores, anchura_mm, altura_mm, profundidad_mm')
                        ->findAll();
        return $query;
    }// end get_datatable_monitors function

    public function get_single_monitor($id_monitor) {
        $query = $this->select('id_monitor, precio, stock, marca, modelo, acabado_color, material, no_monitores, anchura_mm, altura_mm, profundidad_mm, descripcion, imagen')
                        ->where('id_monitor', $id_monitor)
                        ->first();
        return $query;
    }// end get_single_monitor funciton
}//end class Tabla_monitor
