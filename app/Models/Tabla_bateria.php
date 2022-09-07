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

    public function get_datatable_drums() {
        $query = $this->select('id_bateria, precio, stock, marca, modelo, acabado_color')
                        ->findAll();
        return $query;
    }// end get_datatable_drums function

    public function get_single_drum($id_drum) {
        $query = $this->select('id_bateria, precio, stock, marca, modelo, acabado_color, carcasa, elementos_extra, piezas_totales, descripcion, imagen')
                        ->where('id_bateria', $id_drum)
                        ->first();
        return $query;
    }// end get_single_drum funciton

    public function get_home_drums(){
        $query = $this->select('id_bateria, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_bateria', 'DESC')
                        ->limit(6)
                        ->find();
        return $query;
    }// end get_home_drums function
    
    public function get_gallery_img_drums(){
        $query = $this->select('imagen')
                        ->where('imagen !=', 'd00.jpg')
                        ->findAll();
        return $query;
    }// end get_gallery_img_drums function

    public function get_portal_drums(){
        $query = $this->select('id_bateria, marca, modelo, acabado_color, precio, imagen')
                ->orderBy('id_bateria', 'DESC')
                ->findAll();
        return $query;
    }//end get_portal_drums function

    public function get_portal_details_drum($drum_name){
        $query = $this->select('precio, stock, marca, modelo, acabado_color, carcasa, elementos_extra, piezas_totales, descripcion, imagen')
                        ->where('CONCAT_WS(" ", marca, modelo, acabado_color)', $drum_name)
                        ->first();
        return $query;
    }// end get_portal_details_drum function

    public function get_drums_quantity(){
        $query = $this->select('id_bateria')
                        ->findAll();
        return $query;
    }// end get_drums_quantity function
}//end class Tabla_bateria
