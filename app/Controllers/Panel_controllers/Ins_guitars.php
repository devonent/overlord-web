<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Ins_guitars extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(INS_GUITARS_TASK, (isset($session->id_rol) ? $session->id_rol : 0))){
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/ins_guitars', $this->load_data());
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

        $data['section_name'] = 'Guitarras';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Instrumentos', 'panel/guitarras');
        $this->breadcrumb->add_breadcrumb('Guitarras', 'panel/guitarras');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        // ==============
        // GUITARRAS TODAS
        // ==============
        $guitar_table = new \App\Models\Tabla_guitarra;
        $data['guitars_all'] = $guitar_table->get_datatable_guitars();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(INS_GUITARS_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function delete_guitar($id_guitar = 0){
        $guitar_table = new \App\Models\Tabla_guitarra();
        if($guitar_table->find($id_guitar) != NULL){
            $guitar_in_db = $guitar_table->find($id_guitar);
            if($guitar_table->delete($id_guitar)){
                $this->delete_file($guitar_in_db->imagen);
                create_user_message('La guitarra <b>' . $guitar_in_db->marca .' '. $guitar_in_db->modelo .' '. $guitar_in_db->acabado_color . '</b> ha sido eliminada', 'success');
                return redirect()->to(route_to('panel/guitarras'));
            }// end if eliminación de usuario
            else{
                create_user_message('No se ha podido eliminar la guitarra, intente de nuevo...', 'error');
                return redirect()->to(route_to('panel/guitarras'));
            }// end else eliminación de usuario
        }// end if existe usuario
        else{
            create_user_message('La guitarra a eliminar no existe...', 'error');
            return redirect()->to(route_to('panel/guitarras'));
        }
    }// end delete_guitar function

    private function delete_file($file = NULL) {
        if(file_exists('img/products/' . $file) && $file != 'g00.jpg'){
            unlink('img/products/' . $file);
        }//end if file exist
    }// end delete_file function
}//end Dashboard class