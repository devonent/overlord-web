<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_guitars_detail extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_GUITARS_DETAIL_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index($id_guitar = 0) {
        $guitar_table = new \App\Models\Tabla_guitarra();
        if($this->is_allowed){
            if($guitar_table->find($id_guitar) != NULL){
                return $this->create_view('panel_views/ins_guitars_detail', $this->load_data($id_guitar));
            }// end if existe bateria
            else{
                create_user_message('La guitarra a editar no existe...', 'error');
                return redirect()->to(route_to('panel/guitarras'));
            }// end else existe bateria
        }//end if not allowed
        else {
            create_user_message('No cuentas con los permisos suficientes para acceder a esta sección...', 'warning');
            return redirect()->to(route_to('panel/dashboard'));
        }//end else not allowed
    }//end index function

    private function load_data($id_guitar = 0) {
        $data = array();
        //Session elements
        $session = session();
        $data['user_name'] = $session->user_name;
        $data['user_full_name'] = $session->user_full_name;
        $data['user_img'] = $session->user_img;
        $data['user_sex'] = $session->user_sex;
        $data['user_role'] = $session->user_rol;
        $data['user_img'] = $session->user_img;

        $data['section_name'] = 'Editar guitarra';

        // Obtener datos de la batería
        $guitar_table = new \App\Models\Tabla_guitarra();
        $guitar_details = $guitar_table->get_single_guitar($id_guitar);
        $data['guitar_details'] = $guitar_details;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Guitarras', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Editar guitarra: <b>'. $guitar_details->marca . ' ' . $guitar_details->modelo . ' ' . $guitar_details->acabado_color . '</b>', 'panel/guitarras');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Materiales del cuerpo
        $data['body'] = array(
            "Caoba" => "Caoba",
            "Tapa de grano de arce acolchado con cuerpo de álamo" => "Tapa de grano de arce acolchado con cuerpo de álamo",
            "Fresno" => "Fresno",
            "Aliso" => "Aliso",
            "Triplay Arce/Álamo/Arce" => "Triplay Arce/Álamo/Arce",
            "Arce" => "Arce",
            "Tilo" => "Tilo",
            "Arce/Caoba" => "Arce/Caoba",
            "Caoba africana y Arce rizado" => "Caoba africana y Arce rizado",
            "Álamo" => "Álamo"
        );

        //Materiales del mastil
        $data['neck'] = array(
            "Caoba" => "Caoba",
            "Caoba" => "Caoba",
            "Arce" => "Arce",
            "Arce/Nogal" => "Arce/Nogal",
            "Palisandro Indio Oriental" => "Palisandro Indio Oriental",
            "Arce GRX" => "Arce GRX"
        );

        //Materiales del diapasón
        $data['fretboard'] = array(
            "Palo de rosa" => "Palo de rosa",
            "Ébano" => "Ébano",
            "Corazón Púrputa" => "Corazón Púrputa",
            "Arce" => "Arce",
            "Palo de rosa" => "Palo de rosa",
            "Jatoba" => "Jatoba",
            "Laurel Indio" => "Laurel Indio",
            "Laminado de álamo" => "Laminado de álamo",
            "Arce/Ébano" => "Arce/Ébano"
        );
        
        //Marcas de guitarras
        $data['brands'] = array(
            "Gibson" => "Gibson",
            "Epiphone" => "Epiphone",
            "Ibanez" => "Ibanez",
            "Hartwood" => "Hartwood",
            "Jackson" => "Jackson",
            "PRS" => "PRS",
            "Gear4music" => "Gear4music"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_GUITARS_DETAIL_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function update_guitar(){
        $id_guitar = $this->request->getPost('id_guitarra');
        $guitar_table = new \App\Models\Tabla_guitarra();
        if($guitar_table->find($id_guitar) != NULL){
            $guitar_in_db = $guitar_table->find($id_guitar);
            $guitar = array();

            $guitar['precio'] = $this->request->getPost('precio');
            $guitar['stock'] = $this->request->getPost('stock');
            $guitar['marca'] = $this->request->getPost('marca');
            $guitar['modelo'] = $this->request->getPost('modelo');
            $guitar['acabado_color'] = $this->request->getPost('acabado');

            $guitar['cuerpo'] = $this->request->getPost('material_cuerpo');
            $guitar['mastil'] = $this->request->getPost('material_mastil');
            $guitar['diapason'] = $this->request->getPost('material_diapason');
            $guitar['no_trastes'] = $this->request->getPost('no_trastes');
            $guitar['no_cuerdas'] = $this->request->getPost('no_cuerdas');
            $guitar['descripcion'] = $this->request->getPost('descripcion');

            if(($this->request->getFile('imagen-producto'))->getSize() > 0) {
                $this->delete_file($guitar_in_db->imagen);
                $guitar['imagen'] = $this->upload_files($this->request->getFile('imagen-producto'));
            }// if si hay imagen insertada
            else {
                $guitar['imagen'] = $guitar_in_db->imagen;
            }// else si hay imagen insertada

            if(($guitar_table->update($id_guitar, $guitar)) > 0){
                create_user_message('La guitarra se actualizó con éxito', 'success');
                return redirect()->to(route_to('panel/guitarras/editar_guitarra/', $id_guitar));
            }// end if se inserta guitarra
            else {
                create_user_message('Hubo un problema al actualizar la guitarra. Intenta de nuevo', 'error');
                return redirect()->to(route_to('panel/guitarras/editar_guitarra/', $id_guitar));
            }// end else se inserta guitarra

        }//end if existe monitor
        else{
            create_user_message('El monitor a actualizar no existe...', 'error');
            return redirect()->to(route_to('panel/monitores'));
        }//end if existe monitor
        
    }// end insert_guitar function

    private function upload_files($file = NULL) {
        $file_name = $file->getRandomName();
        $file_size = $file->getSize();
        if($file_size <= MAX_IMG_SIZE && $file_size > 0){
            $file->move('img/products', $file_name);
            return $file_name;
        }//end if file size <= 2 MiB
        else{
            return 'g00.jpg';
        }//end else file size <= 2 MiB
    }//end upload_files funciton

    private function delete_file($file = NULL) {
        if(file_exists('img/products/' . $file) && $file != 'g00.jpg'){
            unlink('img/products/' . $file);
        }//end if file exist
    }// end delete_file function
}//end Dashboard class