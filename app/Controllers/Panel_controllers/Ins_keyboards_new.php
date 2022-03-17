<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_keyboards_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_KEYBOARDS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_keyboards_new', $this->load_data());
        }//end if not allowed
        else {
            create_user_message('No cuentas con los permisos suficientes para acceder a esta sección...', 'warning');
            return redirect()->to(route_to('panel/dashboard'));
        }//end else not allowed
    }//end index function

    private function load_data() {
        $data = array();
        //Session elements
        $session = session();
        $data['user_name'] = $session->user_name;
        $data['user_full_name'] = $session->user_full_name;
        $data['user_img'] = $session->user_img;
        $data['user_sex'] = $session->user_sex;
        $data['user_role'] = $session->user_rol;
        $data['user_img'] = $session->user_img;

        $data['section_name'] = 'Registrar teclado nuevo';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/teclados');
        $this->breadcrumb->add_breadcrumb('Teclados', 'panel/teclados');
        $this->breadcrumb->add_breadcrumb('Registrar teclado', 'panel/teclados');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Marcas de teclados
        $data['brands'] = array(
            "Casio" => "Casio",
            "Alesis" => "Alesis",
            "Yamaha" => "Yamaha",
            "Roland Go" => "Roland Go",
            "Korg" => "Korg"
        );

        //Marcas de teclados
        $data['monitors'] = array(
            "N/A" => "N/A",
            "LCD" => "LCD",
            "LED" => "LED"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_KEYBOARDS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function insert_keyboard(){
        $keyboard_table = new \App\Models\Tabla_teclado();
        $keyboard = array();

        $keyboard['precio'] = $this->request->getPost('precio');
        $keyboard['stock'] = $this->request->getPost('stock');
        $keyboard['marca'] = $this->request->getPost('marca');
        $keyboard['modelo'] = $this->request->getPost('modelo');
        $keyboard['acabado_color'] = $this->request->getPost('acabado');

        $keyboard['monitor'] = $this->request->getPost('monitor');
        $keyboard['no_teclas'] = $this->request->getPost('no_teclas');
        $keyboard['anchura_mm'] = $this->request->getPost('anchura');
        $keyboard['altura_mm'] = $this->request->getPost('altura');
        $keyboard['profundidad_mm'] = $this->request->getPost('profundidad');
        $keyboard['descripcion'] = $this->request->getPost('descripcion');

        if(($this->request->getFile('imagen-producto'))->getSize() > 0) {
            $keyboard['imagen'] = $this->upload_files($this->request->getFile('imagen-producto'));
        }// if si hay imagen insertada
        else {
            $keyboard['imagen'] = 'k00.jpg';
        }// else si hay imagen insertada

        if(($keyboard_table->insert($keyboard)) > 0){
            create_user_message('El teclado se registró con éxito', 'success');
            return redirect()->to(route_to('panel/teclados'));
        }// end if se inserta teclado
        else {
            create_user_message('Hubo un problema al registrar el teclado. Intenta de nuevo', 'error');
            return redirect()->to(route_to('panel/teclados'));
        }// end else se inserta teclado
    }// end insert_keyboard function

    private function upload_files($file = NULL) {
        $file_name = $file->getRandomName();
        $file_size = $file->getSize();
        if($file_size <= MAX_IMG_SIZE && $file_size > 0){
            $file->move('img/products', $file_name);
            return $file_name;
        }//end if file size <= 2 MiB
        else{
            return 'k00.jpg';
        }//end else file size <= 2 MiB
    }//end upload_files funciton
}//end Dashboard class