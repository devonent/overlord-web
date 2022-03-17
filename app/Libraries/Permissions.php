<?php

namespace App\Libraries;

class Permissions {
    public static function is_role_allowed($section_to_access = NULL, $id_role = 0) {
        $is_allowed = FALSE;

        switch ($section_to_access) {

            // SECCIONES PERMITIDAS PARA TODOS LOS ROLES
            case DASHBOARD_TASK:
            case INS_GUITARS_TASK:
            case INS_DRUMS_TASK:
            case INS_KEYBOARDS_TASK:
            case INS_MONITORS_TASK:
            case INS_GUITARS_NEW_TASK:
            case INS_DRUMS_NEW_TASK:
            case INS_KEYBOARDS_NEW_TASK:
            case INS_MONITORS_NEW_TASK:
            case GALLERY_TASK:
                $allowed_roles = array(
                    ADMIN_ROLE['id'],
                    OPERATOR_ROLE['id'],
                    USER_ROLE['id']
                );
                $is_allowed = in_array($id_role, $allowed_roles);
                break;

            // SECCIONES PERMITIRDAS PARA ADMIN Y OPERADDOR
            case DEALS_TASK:
                $allowed_roles = array(
                    ADMIN_ROLE['id'],
                    OPERATOR_ROLE['id']
                );
                $is_allowed = in_array($id_role, $allowed_roles);
                break;

            // SECCIONES PERMITIDAS SOLO PARA EL ADMIN
            case USERS_ALL_TASK:
            case USERS_NEW_TASK:
            case USERS_DETAIL_TASK:
                $allowed_roles = array(
                    ADMIN_ROLE['id']
                );
                $is_allowed = in_array($id_role, $allowed_roles);
                break;
            
            default:
                
                break;
        }//end switch id_role
        return $is_allowed;
    }//end is_role_allowed function
}//end class permissions