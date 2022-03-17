<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_drums_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_DRUMS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_drums_new', $this->load_data());
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

        $data['section_name'] = 'Registrar batería nueva';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/baterias');
        $this->breadcrumb->add_breadcrumb('Baterías', 'panel/baterias');
        $this->breadcrumb->add_breadcrumb('Registrar batería', 'panel/baterias');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Materiales de carcasa
        $data['body'] = array(
            "Tilo" => "Tilo",
            "Abedul" => "Abedul",
            "Arce" => "Arce",
            "Acrílico" => "Acrílico",
            "Triplay" => "Triplay",
            "Álamo" => "Álamo",
            "Abedul" => "Abedul"
        );

        //Marcas de baterías
        $data['brands'] = array(
            "DDrum" => "DDrum",
            "Yamaha" => "Yamaha",
            "Tama" => "Tama",
            "Pearl" => "Pearl",
            "Stagg" => "Stagg",
            "Pearl" => "Pearl",
            "Mapex" => "Mapex",
            "WHD" => "WHD",
            "Natal" => "Natal",
            "Dixon" => "Dixon"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_DRUMS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function insert_drum(){
        $drum_table = new \App\Models\Tabla_bateria();
        $drum = array();

        $drum['precio'] = $this->request->getPost('precio');
        $drum['stock'] = $this->request->getPost('stock');
        $drum['marca'] = $this->request->getPost('marca');
        $drum['modelo'] = $this->request->getPost('modelo');
        $drum['acabado_color'] = $this->request->getPost('acabado_color');
        $drum['carcasa'] = $this->request->getPost('carcasa');
        $drum['elementos_extra'] = $this->request->getPost('piezas');
        $drum['piezas_totales'] = $this->request->getPost('no_piezas');
        $drum['descripcion'] = $this->request->getPost('descripcion');

        if(($this->request->getFile('imagen-producto'))->getSize() > 0) {
            $drum['imagen'] = $this->upload_files($this->request->getFile('imagen-producto'));
        }// if si hay imagen insertada
        else {
            $drum['imagen'] = 'd00.jpg';
        }// else si hay imagen insertada

        if(($drum_table->insert($drum)) > 0){
            create_user_message('La batería se registró con éxito', 'success');
            return redirect()->to(route_to('panel/baterias'));
        }// end if se inserta batería
        else {
            create_user_message('Hubo un problema al registrar la batería. Intenta de nuevo', 'error');
            return redirect()->to(route_to('panel/baterias'));
        }// end else se inserta batería
    }// end insert_drum function

    private function upload_files($file = NULL) {
        $file_name = $file->getRandomName();
        $file_size = $file->getSize();
        if($file_size <= MAX_IMG_SIZE && $file_size > 0){
            $file->move('img/products', $file_name);
            return $file_name;
        }//end if file size <= 2 MiB
        else{
            return 'd00.jpg';
        }//end else file size <= 2 MiB
    }//end upload_files funciton
}//end Dashboard class