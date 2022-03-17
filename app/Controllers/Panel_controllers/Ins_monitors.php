<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_monitors extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_MONITORS_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_monitors', $this->load_data());
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

        $data['section_name'] = 'Monitores';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/monitores');
        $this->breadcrumb->add_breadcrumb('Monitores', 'panel/monitores');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        // ==============
        // MONITORES TODOS
        // ==============
        $monitor_table = new \App\Models\Tabla_monitor();
        $data['monitors_all'] = $monitor_table->get_datatable_monitors();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_MONITORS_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function
    
    public function delete_monitor($id_monitor = 0){
        $monitor_table = new \App\Models\Tabla_monitor();
        if($monitor_table->find($id_monitor) != NULL){
            $monitor_in_db = $monitor_table->find($id_monitor);
            if($monitor_table->delete($id_monitor)){
                $this->delete_file($monitor_in_db->imagen);
                create_user_message('El monitor <b>' . $monitor_in_db->marca .' '. $monitor_in_db->modelo .' '. $monitor_in_db->acabado_color . '</b> ha sido eliminado', 'success');
                return redirect()->to(route_to('panel/monitores'));
            }// end if eliminación de usuario
            else{
                create_user_message('No se ha podido eliminar el monitor, intente de nuevo...', 'error');
                return redirect()->to(route_to('panel/monitores'));
            }// end else eliminación de usuario
        }// end if existe usuario
        else{
            create_user_message('El monitor a eliminar no existe...', 'error');
            return redirect()->to(route_to('panel/monitores'));
        }
    }// end delete_monitor function

    private function delete_file($file = NULL) {
        if(file_exists('img/products/' . $file) && $file != 'm00.jpg'){
            unlink('img/products/' . $file);
        }//end if file exist
    }// end delete_file function
}//end Dashboard class