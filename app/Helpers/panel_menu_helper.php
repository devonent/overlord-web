<?php

use App\Controllers\Public_controllers\Instruments;

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
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('asdf');
        $submenu_item['text'] = 'asdf';
        $menu_item['submenu']['asdf'] = $submenu_item;
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

function activate_section($active_section = NULL, $menu = NULL) {
    switch ($active_section) {
        // Activate dashboard section
        case DASHBOARD_TASK:
            $menu['dashboard']['is_active'] = TRUE;
            break;

        // Activate instruments subsections
        case INS_GUITARS_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['guitars']['is_active'] = TRUE;
            break;

        case INS_DRUMS_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['drums']['is_active'] = TRUE;
            break;

        case INS_KEYBOARDS_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['keyboards']['is_active'] = TRUE;
            break;

        case INS_MONITORS_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['monitors']['is_active'] = TRUE;
            break;

        default:
            # No se activará ningún elemento
            break;
    }//end switch

    return $menu;
}//end activate_section function

function generate_nav_menu($active_section) {
    $menu = config_nav_menu();
    $menu = activate_section($active_section, $menu);
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
}