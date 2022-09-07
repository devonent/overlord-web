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

    public function get_home_monitors(){
        $query = $this->select('id_monitor, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_monitor', 'DESC')
                        ->limit(6)
                        ->find();
        return $query;
    }// end get_home_monitors funciton
    
    public function get_gallery_img_monitors(){
        $query = $this->select('imagen')
                        ->where('imagen !=', 'm00.jpg')
                        ->findAll();
        return $query;
    }// end get_gallery_img_monitors function

    public function get_portal_monitors(){
        $query = $this->select('id_monitor, marca, modelo, acabado_color, precio, imagen')
                        ->orderBy('id_monitor', 'DESC')
                        ->findAll();
        return $query;
    }// end get_portal_monitors function

    public function get_portal_details_monitor($monitor_name){
        $query = $this->select('precio, stock, marca, modelo, acabado_color, material, no_monitores, anchura_mm, altura_mm, profundidad_mm, descripcion, imagen')
                        ->where('CONCAT_WS(" ", marca, modelo, acabado_color)', $monitor_name)
                        ->first();
        return $query;
    }// end get_portal_details_monitor function

    public function get_monitors_quantity(){
        $query = $this->select('id_monitor')
                        ->findAll();
        return $query;
    }// end get_monitors_quantity function
}//end class Tabla_monitor