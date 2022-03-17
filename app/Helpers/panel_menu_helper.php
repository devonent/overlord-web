<?php

function config_nav_menu($id_role = 0) {
    $menu = array();
    $menu_item = array();
    $submenu_item = array();

    //Dashboard section
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('panel/dashboard');
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
        $submenu_item['link'] = route_to('panel/guitarras');
        $submenu_item['text'] = 'Guitarras';
        $menu_item['submenu']['guitars'] = $submenu_item;
        //Baterias subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('panel/baterias');
        $submenu_item['text'] = 'Baterías';
        $menu_item['submenu']['drums'] = $submenu_item;
        //Teclados subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('panel/teclados');
        $submenu_item['text'] = 'Teclados';
        $menu_item['submenu']['keyboards'] = $submenu_item;
        //Monitores subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('panel/monitores');
        $submenu_item['text'] = 'Monitores';
        $menu_item['submenu']['monitors'] = $submenu_item;
    $menu['instruments'] = $menu_item;
    
    //Ofertas section
    // if($id_role == ADMIN_ROLE['id'] || $id_role == OPERATOR_ROLE['id']){
    //     $menu_item['is_active'] = false;
    //     $menu_item['link'] = route_to('panel/ofertas');
    //     $menu_item['icon'] = 'bi bi-tag-fill';
    //     $menu_item['text'] = 'Ofertas';
    //     $menu_item['submenu'] = array();
    //     $menu['deals'] = $menu_item;
    // }//end if admin and operator only

    //Galeria section
    // $menu_item['is_active'] = false;
    // $menu_item['link'] = route_to('panel/galeria');
    // $menu_item['icon'] = 'bi bi-image-fill';
    // $menu_item['text'] = 'Galería';
    // $menu_item['submenu'] = array();
    // $menu['gallery'] = $menu_item;

    //Usuarios section
    if($id_role == ADMIN_ROLE['id']){
        $menu_item['is_active'] = false;
        $menu_item['link'] = route_to('panel/usuarios');
        $menu_item['icon'] = 'bi bi-people-fill';
        $menu_item['text'] = 'Usuarios';
        $menu_item['submenu'] = array();
        $menu['users'] = $menu_item;
    }//end if admin only
    
    return $menu;
}//end config_nav_menu function

function activate_section($section_to_activate = NULL, $menu = NULL) {
    switch ($section_to_activate) {
        // Activate dashboard section
        case DASHBOARD_TASK:
            $menu['dashboard']['is_active'] = TRUE;
            break;
            
        // Activate instruments subsections
        case INS_GUITARS_TASK:
        case INS_GUITARS_NEW_TASK:
        case INS_GUITARS_DETAIL_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['guitars']['is_active'] = TRUE;
            break;

        case INS_DRUMS_TASK:
        case INS_DRUMS_NEW_TASK:
        case INS_DRUMS_DETAIL_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['drums']['is_active'] = TRUE;
            break;

        case INS_KEYBOARDS_TASK:
        case INS_KEYBOARDS_NEW_TASK:
        case INS_KEYBOARDS_DETAIL_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['keyboards']['is_active'] = TRUE;
            break;

        case INS_MONITORS_TASK:
        case INS_MONITORS_NEW_TASK:
        case INS_MONITORS_DETAIL_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['monitors']['is_active'] = TRUE;
            break;

        case DEALS_TASK:
            $menu['deals']['is_active'] = TRUE;
            break;

        case GALLERY_TASK:
            $menu['gallery']['is_active'] = TRUE;
            break;

        case USERS_ALL_TASK:
        case USERS_NEW_TASK:
        case USERS_DETAIL_TASK:
            $menu['users']['is_active'] = TRUE;
            break;
            
         default:
            //No se activará ningún elemento
            break;
    }//end switch

    return $menu;
}//end activate_section function

function generate_nav_menu($section_to_activate = NULL, $id_role = 0) {
    $menu = config_nav_menu($id_role);
    $menu = activate_section($section_to_activate, $menu);
    $html = '';
    $html .= '
        <li class="sidebar-title ps-0 text-muted">Menu de navegación</li>
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
        else {
            $html .= '
            <li class="sidebar-item has-sub ' . (($menu_item['is_active']) ? 'active' : '') . '">
                <a href="' . $menu_item['link'] . '" class="sidebar-link">
                    <i class="' . $menu_item['icon'] . '"></i>
                    <span>' . $menu_item['text'] . '</span>
                </a>
                <ul class="submenu ' . (($menu_item['is_active']) ? 'active' : '') . '">            
            ';
                foreach($menu_item['submenu'] as $submenu_item) {
                    $html .= '
                    <li class="submenu-item ' . (($submenu_item['is_active']) ? 'active' : '') . '">
                        <a href="' . $submenu_item['link'] . '">' . $submenu_item['text'] . '</a>
                    </li>
                    ';
                }//end foreach submenu
            $html .= '
                </ul>
            </li>
            ';
        }//end else menu tiene submenu
    }//end foreach menu

    return $html;
}//end generate_nav_menu function