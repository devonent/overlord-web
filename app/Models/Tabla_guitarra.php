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
    }// end get_databale_guitars

    public function get_single_guitar($id_guitar) {
        $query = $this->select('id_guitarra, precio, stock, marca, modelo, acabado_color, cuerpo, mastil, diapason, no_trastes, no_cuerdas, descripcion, imagen')
                        ->where('id_guitarra', $id_guitar)
                        ->first();
        return $query;
    }// end get_single_guitar funciton

    public function get_home_guitars(){
        $query = $this->select('id_guitarra, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_guitarra', 'DESC')
                        ->limit(6)
                        ->find();
        return $query;        
    }// end get_home_guitars function

    public function get_gallery_img_guitars(){
        $query = $this->select('imagen')
                        ->where('imagen !=', 'g00.jpg')
                        ->findAll();
        return $query;
    }// end get_gallery_img_guitars function

    public function get_portal_guitars(){
        $query = $this->select('id_guitarra, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_guitarra', 'DESC')
                        ->findAll();
        return $query;
    }// end get_portal_guitars function

    public function get_portal_details_guitar($guitar_name){
        $query = $this->select('precio, stock, marca, modelo, acabado_color, cuerpo, mastil, diapason, no_trastes, no_cuerdas, descripcion, imagen')
                        ->where('CONCAT_WS(" ", marca, modelo, acabado_color)', $guitar_name)
                        ->first();
        return $query;
    }// end get_portal_details_guitar function

    public function get_guitars_quantity(){
        $query = $this->select('id_guitarra')
                        ->findAll();
        return $query;
    }// end get_guitars_quantity function
}//end class Tabla_guitarra
