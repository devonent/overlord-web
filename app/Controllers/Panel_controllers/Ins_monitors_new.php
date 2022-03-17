<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_monitors_new extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_MONITORS_NEW_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_monitors_new', $this->load_data());
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

        $data['section_name'] = 'Registrar monitor nuevo';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/monitores');
        $this->breadcrumb->add_breadcrumb('Monitores', 'panel/monitores');
        $this->breadcrumb->add_breadcrumb('Registrar monitor', 'panel/monitores');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Marcas de monitores
        $data['brands'] = array(
            "Presonus" => "Presonus",
            "Mackie" => "Mackie",
            "SubZero" => "SubZero",
            "ESI" => "ESI",
            "KRK" => "KRK",
            "Neumann" => "Neumann",
            "Hercules" => "Hercules",
            "Pioneer" => "Pioneer",
            "JBL" => "JBL",
            "Avantone" => "Avantone",
            "Yamaha" => "Yamaha",
            "Focal" => "Focal",
            "Palmer" => "Palmer"
        );

        //Materiales de monitores
        $data['material'] = array(
            "Fibra de densidad media" => "Fibra de densidad media",
            "Metal cepillado" => "Metal cepillado",
            "MDF, PVC" => "MDF, PVC",
            "Metal" => "Metal",
            "ABS con rejilla metálica" => "ABS con rejilla metálica",
            "MDF 18mm" => "MDF 18mm",
            "MDF Bass Reflex" => "MDF Bass Reflex",
            "Paneles MDF" => "Paneles MDF",
            "Contrachapado de abedul, MDF" => "Contrachapado de abedul, MDF",
            "MDF" => "MDF"
        );

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_MONITORS_NEW_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function insert_monitor(){
        $monitor_table = new \App\Models\Tabla_monitor();
        $monitor = array();

        $monitor['precio'] = $this->request->getPost('precio');
        $monitor['stock'] = $this->request->getPost('stock');
        $monitor['marca'] = $this->request->getPost('marca');
        $monitor['modelo'] = $this->request->getPost('modelo');
        $monitor['acabado_color'] = $this->request->getPost('acabado');

        $monitor['material'] = $this->request->getPost('material');
        $monitor['no_monitores'] = $this->request->getPost('no_monitores');
        $monitor['anchura_mm'] = $this->request->getPost('anchura');
        $monitor['altura_mm'] = $this->request->getPost('altura');
        $monitor['profundidad_mm'] = $this->request->getPost('profundidad');
        $monitor['descripcion'] = $this->request->getPost('descripcion');

        if(($this->request->getFile('imagen-producto'))->getSize() > 0) {
            $monitor['imagen'] = $this->upload_files($this->request->getFile('imagen-producto'));
        }// if si hay imagen insertada
        else {
            $monitor['imagen'] = 'm00.jpg';
        }// else si hay imagen insertada

        if(($monitor_table->insert($monitor)) > 0){
            create_user_message('El monitor se registró con éxito', 'success');
            return redirect()->to(route_to('panel/monitores'));
        }// end if se inserta monitor
        else {
            create_user_message('Hubo un problema al registrar el monitor. Intenta de nuevo', 'error');
            return redirect()->to(route_to('panel/monitores'));
        }// end else se inserta monitor
    }// end insert_monitor function

    private function upload_files($file = NULL) {
        $file_name = $file->getRandomName();
        $file_size = $file->getSize();
        if($file_size <= MAX_IMG_SIZE && $file_size > 0){
            $file->move('img/products', $file_name);
            return $file_name;
        }//end if file size <= 2 MiB
        else{
            return 'm00.jpg';
        }//end else file size <= 2 MiB
    }//end upload_files funciton
}//end Dashboard class