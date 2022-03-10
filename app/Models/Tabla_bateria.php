<?php

namespace App\Models;
use CodeIgniter\Model;

class Tabla_bateria extends Model {
    protected $table = 'ins_bateria';
    protected $primaryKey = 'id_bateria';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_bateria',
        'precio',
        'stock',
        'marca',
        'modelo',
        'acabado_color',
        'carcasa',
        'elementos_extra',
        'piezas_totales',
        'descripcion',
        'imagen'
    ];

    public function get_all_drums() {
        $query = $this->select('id_bateria, precio, stock, marca, modelo, acabado_color')
                        ->findAll();
        return $query;
    }
}//end class Tabla_usuario
