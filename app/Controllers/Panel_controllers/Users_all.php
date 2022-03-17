<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Users_all extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(USERS_ALL_TASK, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index() {
        if($this->is_allowed){
            return $this->create_view('panel_views/users_all', $this->load_data());
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

        $data['section_name'] = 'Usuarios';

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Usuarios', 'panel/usuarios');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        // ==============
        // USUARIOS TODOS
        // ==============
        $user_table = new \App\Models\Tabla_usuario;
        $data['users_all'] = $user_table->get_all_users();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(USERS_ALL_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function delete_user($id_user = 0){
        $user_table = new \App\Models\Tabla_usuario();
        if($user_table->find($id_user) != NULL){
            $user_in_db = $user_table->find($id_user);
            if($user_table->delete($id_user)){
                $this->delete_file($user_in_db->imagen);
                create_user_message('El usuario <b>' . $user_in_db->nombre .' '. $user_in_db->apellido_p .' '. $user_in_db->apellido_m . '</b> ha sido eliminado', 'success');
                return redirect()->to(route_to('panel/usuarios'));
            }// end if eliminación de usuario
            else{
                create_user_message('No se ha podido eliminar el usuario, intente de nuevo...', 'error');
                return redirect()->to(route_to('panel/usuarios'));
            }// end else eliminación de usuario
        }// end if existe usuario
        else{
            create_user_message('El usuario a eliminar no existe...', 'error');
            return redirect()->to(route_to('panel/usuarios'));
        }
    }// end delete_user function

    private function delete_file($file = NULL) {
        if(file_exists('img/users/' . $file) && $file != 'avatar-none.jpg'){
            unlink('img/users/' . $file);
        }//end if file exist
    }// end delete_file function
}//end Users_all class