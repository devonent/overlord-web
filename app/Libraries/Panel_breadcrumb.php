<?php

namespace App\Libraries;

class Panel_breadcrumb {
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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-right">
        ';
        foreach ($this->breadcrumbs as $index => $breadcrumb) {
            if ($index == $lenght) {
                $html .= '
                <li class="breadcrumb-item">
                    ' . $breadcrumb['crumb'] . '
                </li>
                ';
            }//end if último elemento
            else {
                $html .= '
                <li class="breadcrumb-item">
                    <a href="' . $breadcrumb['href'] . '">
                        ' . $breadcrumb['crumb'] . '
                    </a>
                </li>
                ';
            }//end else último elemento
        }//end foreach

        $html .= '
            </ol>
        </nav>
        ';

        return $html;
    }//end render function
}//end breadcrumb