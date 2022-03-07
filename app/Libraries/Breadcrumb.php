<?php

namespace App\Libraries;

class Breadcrumb {
    private $breadcrumbs = array();
    private $tags;

    public function __construct() {

        $this->tags['navopen']  = "<nav aria-label=\"breadcrumb\">";
        $this->tags['navclose'] = "</nav>";
        $this->tags['olopen']   = "<ol class=\"breadcrumb breadcrumb-right\">";
        $this->tags['olclose']  = "</ol>";
        $this->tags['liopen']   = "<li class=\"breadcrumb-item\">";
        $this->tags['liclose']  = "</li>";
    }//end __construct

    public function add($crumb, $href){
        if (!$crumb or !$href) return; // if the title or Href not set return 

        $this->breadcrumbs[] = array(
            'crumb' => $crumb,
            'href' => $href,
        );
    }//end add function

    public function render() {

        $html  = $this->tags['navopen'];
        $html .= $this->tags['olopen'];

        $lenght = count($this->breadcrumbs) - 1;

        foreach ($this->breadcrumbs as $index => $breadcrumb) {

            if ($index == $lenght) {
                $html .= $this->tags['liopen'];
                $html .= $breadcrumb['crumb'];
                $html .= $this->tags['liclose'];
            } else {
                $html .= $this->tags['liopen'];
                $html .= '<a href="' . base_url($breadcrumb['href']) . '">';
                $html .= $breadcrumb['crumb'];
                $html .= '</a>';
                $html .= $this->tags['liclose'];
            }
        }

        $html .= $this->tags['olclose'];
        $html .= $this->tags['navclose'];

        return $html;
    }//end render function
}//end breadcrumb