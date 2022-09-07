<?php

function config_portal_navbar() {
    $menu = array();
    $menu_item = array();
    $submenu_item = array();

    //Inicio section
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('/');
    $menu_item['text'] = 'Inicio';
    $menu_item['submenu'] = array();
    $menu['home'] = $menu_item;

    //Nosotros section
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('nosotros');
    $menu_item['text'] = 'Nosotros';
    $menu_item['submenu'] = array();
    $menu['info'] = $menu_item;

    //Ofertas section
    // $menu_item['is_active'] = false;
    // $menu_item['link'] = route_to('ofertas');
    // $menu_item['text'] = 'Ofertas';
    // $menu_item['submenu'] = array();
    // $menu['deals'] = $menu_item;

    //Instrumentos section
    $menu_item['is_active'] = false;
    $menu_item['link'] = '#!';
    $menu_item['text'] = 'Instrumentos ▼';
    $menu_item['submenu'] = array();   
        //Guitarras subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('instrumentos/guitarras');
        $submenu_item['text'] = 'Guitarras';
        $menu_item['submenu']['guitars'] = $submenu_item;
        //Baterias subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('instrumentos/baterias');
        $submenu_item['text'] = 'Baterías';
        $menu_item['submenu']['drums'] = $submenu_item;
        //Teclados subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('instrumentos/teclados');
        $submenu_item['text'] = 'Teclados';
        $menu_item['submenu']['keyboards'] = $submenu_item;
        //Monitores subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('instrumentos/monitores');
        $submenu_item['text'] = 'Monitores';
        $menu_item['submenu']['monitors'] = $submenu_item;
    $menu['instruments'] = $menu_item;
    
    //Galería section
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('galeria');
    $menu_item['text'] = 'Galería';
    $menu_item['submenu'] = array();
    $menu['gallery'] = $menu_item;

    //Contacto section
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('contacto');
    $menu_item['text'] = 'Contacto';
    $menu_item['submenu'] = array();
    $menu['contact'] = $menu_item;

    //Acerca de section
    $menu_item['is_active'] = false;
    $menu_item['link'] = '#!';
    $menu_item['text'] = 'Acerca de ▼';
    $menu_item['submenu'] = array();   
        //El sitio subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('acerca/sitio');
        $submenu_item['text'] = 'El sitio';
        $menu_item['submenu']['site'] = $submenu_item;
        //El autor subsection
        $submenu_item = array();
        $submenu_item['is_active'] = false;
        $submenu_item['link'] = route_to('acerca/autor');
        $submenu_item['text'] = 'El autor';
        $menu_item['submenu']['author'] = $submenu_item;
    $menu['about_us'] = $menu_item;

    return $menu;
}//end config_portal_navbar function

function activate_section_navbar($section_to_activate = NULL, $menu = NULL) {
    switch ($section_to_activate) {
        // Activate inicio section
        case PORTAL_HOME_TASK:
            $menu['home']['is_active'] = TRUE;
            break;

        // Activate nosotros section
        case PORTAL_INFO_TASK:
            $menu['info']['is_active'] = TRUE;
            break;

        // Activate ofertas section
        case PORTAL_DEALS_TASK:
            $menu['deals']['is_active'] = TRUE;
            break;

        // Activate instruments subsections
        case PORTAL_INS_GUITARS_TASK:
        case PORTAL_INS_GUITARS_SINGLE_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['guitars']['is_active'] = TRUE;
            break;

        case PORTAL_INS_DRUMS_TASK:
        case PORTAL_INS_DRUMS_SINGLE_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['drums']['is_active'] = TRUE;
            break;

        case PORTAL_INS_KEYBOARDS_TASK:
        case PORTAL_INS_KEYBOARDS_SINGLE_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['keyboards']['is_active'] = TRUE;
            break;

        case PORTAL_INS_MONITORS_TASK:
        case PORTAL_INS_MONITORS_SINGLE_TASK:
            $menu['instruments']['is_active'] = TRUE;
            $menu['instruments']['submenu']['monitors']['is_active'] = TRUE;
            break;

        case PORTAL_GALLERY_TASK:
            $menu['gallery']['is_active'] = TRUE;
            break;

        case PORTAL_CONTACT_TASK:
            $menu['contact']['is_active'] = TRUE;
            break;

        case PORTAL_ABOUT_SITE_TASK:
            $menu['about_us']['is_active'] = TRUE;
            $menu['about_us']['submenu']['site']['is_active'] = TRUE;
            break;

        case PORTAL_ABOUT_AUTHOR_TASK:
            $menu['about_us']['is_active'] = TRUE;
            $menu['about_us']['submenu']['author']['is_active'] = TRUE;
            break;

         default:
            //No se activará ningún elemento
            break;
    }//end switch

    return $menu;
}//end activate_section_navbar function

function generate_portal_navbar($section_to_activate = NULL) {
    
    $menu = config_portal_navbar();
    $menu = activate_section_navbar($section_to_activate, $menu);
    $html = '';
    foreach($menu as $menu_item) {
        if($menu_item['link'] != '#!') {
            $html .= '
            <li class="nav-item ' . (($menu_item['is_active']) ? 'active' : '') . '">
                <a class="nav-link" href="' . $menu_item['link'] . '">' . $menu_item['text'] . '</a>
            </li>
            ';
        }//end if menu no tiene submenu
        else {
            $html .= '
            <li class="nav-item submenu dropdown ' . (($menu_item['is_active']) ? 'active' : '') . '">
                <a href="' . $menu_item['link'] . '" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item['text'] . '</a>
                <ul class="dropdown-menu">           
            ';
                foreach($menu_item['submenu'] as $submenu_item) {
                    $html .= '
                    <li class="nav-item ' . (($submenu_item['is_active']) ? 'active' : '') . '">
                        <a class="nav-link" href="' . $submenu_item['link'] . '">' . $submenu_item['text'] . '</a>
                    </li>
                    ';
                }//end foreach submenu
            $html .= '
                </ul>
            </li>
            ';
        }
    }//end foreach menu

    return $html;
}//end generate_portal_navbar function