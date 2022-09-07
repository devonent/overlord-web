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
    }// end get_datatable_keyboards function

    public function get_single_keyboard($id_keyboard) {
        $query = $this->select('id_teclado, precio, stock, marca, modelo, acabado_color, monitor, no_teclas, anchura_mm, altura_mm, profundidad_mm, descripcion, imagen')
                        ->where('id_teclado', $id_keyboard)
                        ->first();
        return $query;
    }// end get_single_keyboard funciton

    public function get_home_keyboards(){
        $query = $this->select('id_teclado, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_teclado', 'DESC')
                        ->limit(6)
                        ->find();
        return $query;
    }// end get_home_keyboard function
    
    public function get_gallery_img_keyboards(){
        $query = $this->select('imagen')
                        ->where('imagen !=', 'k00.jpg')
                        ->findAll();
        return $query;
    }// end get_gallery_img_keyboards function

    public function get_portal_keyboards(){
        $query = $this->select('id_teclado, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_teclado', 'DESC')
                        ->findAll();
        return $query;
    }// end get_portal_keyboards function

    public function get_portal_details_keyboard($keyboard_name){
        $query = $this->select('precio, stock, marca, modelo, acabado_color, monitor, no_teclas, anchura_mm, altura_mm, profundidad_mm, descripcion, imagen')
                        ->where('CONCAT_WS(" ", marca, modelo, acabado_color)', $keyboard_name)
                        ->first();
        return $query;
    }// end get_portal_details_keyboard function

    public function get_keyboards_quantity(){
        $query = $this->select('id_teclado')
                        ->findAll();
        return $query;
    }// end get_guitars_quantity function
}//end class Tabla_teclado
