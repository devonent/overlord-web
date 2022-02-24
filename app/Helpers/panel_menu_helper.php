<?php

function config_nav_menu() {
    $menu = array();
    $menu_item = array();
    $submenu_item = array();

    //Dashboard section
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('dashboard');
    $menu_item['icon'] = 'bi bi-grid-fill';
    $menu_item['text'] = 'Dashboard';
    $menu_item['submenu'] = array();
    $menu['dashboard'] = $menu_item;

    //Instrumentos section
    $menu_item['is_active'] = false;
    $menu_item['link'] = '#!';
    $menu_item['icon'] = 'bi bi-file-music-fill';
    $menu_item['text'] = 'Instrumentos';
    $menu_item['submenu'] = array();
        
        //Guitarras subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('guitarras');
        $submenu_item['text'] = 'Guitarras';
        $menu_item['submenu']['guitars'] = $submenu_item;
        
        //Baterias subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('baterias');
        $submenu_item['text'] = 'Baterías';
        $menu_item['submenu']['drums'] = $submenu_item;
        
        //Teclados subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('teclados');
        $submenu_item['text'] = 'Teclados';
        $menu_item['submenu']['keyboards'] = $submenu_item;
        
        //Monitores subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('monitores');
        $submenu_item['text'] = 'Monitores';
        $menu_item['submenu']['monitors'] = $submenu_item;

    $menu['instruments'] = $menu_item;

    return $menu;

}//end config_nav_menu function

function generate_nav_menu() {
    $menu = config_nav_menu();
    $html = '';
    $html .= '
        <li class="sidebar-title">Menu</li>
    ';
    foreach($menu as $menu_item) {
        if($menu_item['link'] != '#!') {
            $html .= '
            <li class="sidebar-item ' . (($menu_item['is_active']) ? 'active' : '') . '">
                <a href="' . $menu_item['link'] . '" class="sidebar-link">
                    <i class="' . $menu_item['icon'] . '"></i>
                    <span>' . $menu_item['text'] . '</span>
                </a>
            </li>
            ';
        }//end if menu no tiene submenu
    }//end foreach

    return $html;
}