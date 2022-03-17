<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;
use App\Libraries\Permissions;
use App\Libraries\Panel_breadcrumb;

class Users_detail extends BaseController {
    private $is_allowed = TRUE;
    private $breadcrumb;

    public function __construct() {
        $session = session();
        $this->breadcrumb = new Panel_breadcrumb();

        if(!Permissions::is_role_allowed(USERS_DETAIL_TASK, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->is_allowed = FALSE;
        }//end if role not allowed
    }//end __construct function

    public function index($id_user = 0) {
        $user_table = new \App\Models\Tabla_usuario();
        if($this->is_allowed){
            if($user_table->find($id_user) != NULL){
                return $this->create_view('panel_views/users_detail', $this->load_data($id_user));
            }// end if existe usuario
            else {
                create_user_message('El usuario a editar no existe...', 'error');
                return redirect()->to(route_to('panel/usuarios'));
            }// end else existe usuario
        }//end if not allowed
        else {
            create_user_message('No cuentas con los permisos suficientes para acceder a esta sección...', 'warning');
            return redirect()->to(route_to('panel/dashboard'));
        }//end else not allowed
    }//end index function

    private function load_data($id_user = 0) {
        $data = array();
        //Session elements
        $session = session();
        $data['user_name'] = $session->user_name;
        $data['user_full_name'] = $session->user_full_name;
        $data['user_img'] = $session->user_img;
        $data['user_sex'] = $session->user_sex;
        $data['user_role'] = $session->user_rol;
        $data['user_img'] = $session->user_img;

        $data['section_name'] = 'Editar usuario';

        //Obtener datos del usuario
        $user_table = new \App\Models\Tabla_usuario();
        $user_details = $user_table->get_single_user($id_user);
        $data['user_details'] = $user_details;

        //Breadcrumb
        $this->breadcrumb->add_breadcrumb('Dashboard', 'panel/dashboard');
        $this->breadcrumb->add_breadcrumb('Usuarios', 'panel/usuarios');
        $this->breadcrumb->add_breadcrumb('Editar usuario: <b>' . $user_details->nombre .' '. $user_details->apellido_p .' '. $user_details->apellido_m . '</b>', '#!');
        $data['breadcrumb'] = $this->breadcrumb->generate_breadcrumb();

        //Elementos propios del controller
        $roles_table = new \App\Models\Tabla_rol;
        $data['roles'] = $roles_table->generate_roles_dropdown();

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(USERS_DETAIL_TASK, session()->id_rol);
        return view($view_name, $content);
    }//end create_view function

    public function update_user(){
        $id_user = $this->request->getPost('id_usuario');
        $user_table = new \App\Models\Tabla_usuario();
        if($user_table->find($id_user) != NULL){
            $user_in_db = $user_table->find($id_user); 
            $user = array();

            $user['nombre'] = $this->request->getPost('nombre');
            $user['apellido_p'] = $this->request->getPost('apellido-paterno');
            $user['apellido_m'] = $this->request->getPost('apellido-materno');
            $user['id_rol'] = $this->request->getPost('rol');
            $user['email'] = $this->request->getPost('email');
            $user['sexo'] = $this->request->getPost('sexo');

            if($this->request->getPost('confirmar-contrasenia') != ''){
                $user['password'] = $this->request->getPost('confirmar-contrasenia');
            }// end if si hay contrasenia

            if(($this->request->getFile('imagen-perfil'))->getSize() > 0) {
                $this->delete_file($user_in_db->imagen);
                $user['imagen'] = $this->upload_files($this->request->getFile('imagen-perfil'));
            }// if si hay imagen insertada
            else {
                $user['imagen'] = $user_in_db->imagen;
            }// else si hay imagen insertada

            if(($user_table->update($id_user, $user)) > 0){
                create_user_message('El usuario se actualizó con éxito', 'success');
                return redirect()->to(route_to('panel/usuarios/editar_usuario/', $id_user));
            }// end if se inserta usuario
            else {
                create_user_message('Hubo un problema al actualizar el usuario. Intenta de nuevo', 'error');
                return redirect()->to(route_to('panel/usuarios/editar_usuario/', $id_user));
            }// end else se inserta usuario
        }// end if existe usuario
        else {
            create_user_message('El usuario a actualizar no existe...', 'error');
            return redirect()->to(route_to('panel/usuarios'));
        }// end else existe usuario
        
    }//end insert_user function

    private function upload_files($file = NULL) {
        $file_name = $file->getRandomName();
        $file_size = $file->getSize();
        if($file_size <= MAX_USER_IMG_SIZE && $file_size > 0){
            $file->move('img/users', $file_name);
            return $file_name;
        }//end if file size <= 2 MiB
        else{
            return 'avatar-none.jpg';
        }//end else file size <= 2 MiB
    }//end upload_files funciton

    private function delete_file($file = NULL) {
        if(file_exists('img/users/' . $file) && $file != 'avatar-none.jpg'){
            unlink('img/users/' . $file);
        }//end if file exist
    }// end delete_file function

    // Realizar vista detalles
    // Realizar controlador detalles
    // Realizar ruta get con parámetro (:num), backslash y indes/$1
    // Colocar un link con route_to('ruta', parametro)
    // Generar las tareas para detalles
    // Crear función en método de tabla_usuario
}//end User_news class