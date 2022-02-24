<?php

namespace App\Controllers\Panel_controllers;
use App\Controllers\BaseController;

class Dashboard extends BaseController {
    public function __construct() {

    }//end __construct function

    public function index() {
        return $this->create_view('panel_views/index', $this->load_data());
    }//end index function

    private function load_data() {
        $data = array();
        //Session elements
        $session = session();
        $data['user_name'] = $session->user_name;
        $data['user_full_name'] = $session->user_full_name;
        $data['user_img'] = $session->user_img;
        $data['user_sex'] = $session->user_sex;

        return $data;
    }//end load_data function

    private function create_view($view_name = '', $content = array()){
        $content['menu'] = generate_nav_menu(DASHBOARD_TASK );
        return view($view_name, $content);
    }
}