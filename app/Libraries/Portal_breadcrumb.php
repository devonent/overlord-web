<?php

namespace App\Libraries;

class Portal_breadcrumb {
    private $breadcrumbs = array();

    public function add_breadcrumb($crumb, $href){
        if (!$crumb or !$href) return; 

        $this->breadcrumbs[] = array(
            'crumb' => $crumb,
            'href' => route_to($href)
        );
    }//end add function

    public function generate_breadcrumb() {
        $lenght = count($this->breadcrumbs) - 1;

        $html  = '
        <nav class="d-flex align-items-center">
        ';
        foreach ($this->breadcrumbs as $index => $breadcrumb) {
            if ($index == $lenght) {
                $html .= '
                <a href="#!">'.$breadcrumb['crumb'].'</a>
                ';
            }//end if último elemento
            else {
                $html .= '
                <a href="'.$breadcrumb['href'].'">'.$breadcrumb['crumb'].'
                    <span class="lnr lnr-arrow-right"></span>
                </a>
                ';
            }//end else último elemento
        }//end foreach

        $html .= '
        </nav>
        ';

        return $html;
    }//end render function
}//end breadcrumb