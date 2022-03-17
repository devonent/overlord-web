<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_keyboards_detail extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_KEYBOARDS_DETAIL_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index($id_keyboard = 0) {
        $keyboard_table = new \App\Models\Tabla_teclado();
        if($this->is_allowed){
            if($keyboard_table->find($id_keyboard) != NULL){
                return $this->create_view('panel_views/ins_keyboards_detail', $this->load_data($id_keyboard));
            }// end if existe bateria
            else{
                create_user_message('El teclado a editar no existe...', 'error');
                return redirect()->to(route_to('panel/teclados'));
            }// end else existe bateria
        }//end if not allowed
        else {
            create_user_message('No cuentas con los permisos suficientes para acceder a esta sección...', 'warning');
            return redirect()->to(route_to('panel/dashboard'));
        }//end else not allowed
    }//end index function

    private function load_data($id_keyboard = 0) {
        $data = array();
        //Session elements
        $session = session();
        $data['user_name'] = $session->user_name;
        $data['user_full_name'] = $session->user_full_name;
        $data['user_img'] = $session->user_img;
        $data['user_sex'] = $session->user_sex;
        $data['user_role'] = $session->user_rol;
        $data['user_img'] = $session->user_img;

        $data['section_name'] = 'Editar teclado';

        // Obtener datos de la batería
        $keyboard_table = new \App\Models\Tabla_teclado();
        $keyboard_details = $keyboard_table->get_single_keyboard($id_keyboard);
        $data['keyboard_details'] = $keyboard_details;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/teclados');
        $this->breadcrumb->add_breadcrumb('Teclados', 'panel/teclados');
        $this->breadcrumb->add_breadcrumb('Editar teclado: <b>'. $keyboard_details->marca . ' ' . $keyboard_details->modelo . ' ' . $keyboard_details->acabado_color . '</b>', 'panel/teclados');
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
        $content['menu'] = generate_nav_menu(INS_KEYBOARDS_DETAIL_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function update_keyboard(){
        $id_keyboard = $this->request->getPost('id_teclado');
        $keyboard_table = new \App\Models\Tabla_teclado();
        if($keyboard_table->find($id_keyboard) != NULL){
            $keyboard_in_db = $keyboard_table->find($id_keyboard);
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
                $this->delete_file($keyboard_in_db->imagen);
                $keyboard['imagen'] = $this->upload_files($this->request->getFile('imagen-producto'));
            }// if si hay imagen insertada
            else {
                $keyboard['imagen'] = $keyboard_in_db->imagen;
            }// else si hay imagen insertada

            if(($keyboard_table->update($id_keyboard, $keyboard)) > 0){
                create_user_message('El teclado se actualizó con éxito', 'success');
                return redirect()->to(route_to('panel/teclados/editar_teclado/', $id_keyboard));
            }// end if se inserta teclado
            else {
                create_user_message('Hubo un problema al actualizar el teclado. Intenta de nuevo', 'error');
                return redirect()->to(route_to('panel/teclados/editar_teclado/', $id_keyboard));
            }// end else se inserta teclado

        }//end if existe monitor
        else{
            create_user_message('El teclado a actualizar no existe...', 'error');
            return redirect()->to(route_to('panel/teclados'));
        }//end if existe monitor
        
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

    private function delete_file($file = NULL) {
        if(file_exists('img/products/' . $file) && $file != 'k00.jpg'){
            unlink('img/products/' . $file);
        }//end if file exist
    }// end delete_file function
}//end Dashboard class