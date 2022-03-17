<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_guitars_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_GUITARS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_guitars_new', $this->load_data());
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

        $data['section_name'] = 'Registrar guitarra nueva';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Guitarras', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Registrar guitarra', 'panel/guitarras');
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
        $content['menu'] = generate_nav_menu(INS_GUITARS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function insert_guitar(){
        $guitar_table = new \App\Models\Tabla_guitarra();
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
            $guitar['imagen'] = $this->upload_files($this->request->getFile('imagen-producto'));
        }// if si hay imagen insertada
        else {
            $guitar['imagen'] = 'g00.jpg';
        }// else si hay imagen insertada

        if(($guitar_table->insert($guitar)) > 0){
            create_user_message('La guitarra se registró con éxito', 'success');
            return redirect()->to(route_to('panel/guitarras'));
        }// end if se inserta guitarra
        else {
            create_user_message('Hubo un problema al registrar la guitarra. Intenta de nuevo', 'error');
            return redirect()->to(route_to('panel/guitarras'));
        }// end else se inserta guitarra
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
}//end Dashboard class