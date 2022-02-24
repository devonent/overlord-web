<?php

function create_user_message($text = '') {
    session()->set('message', $text);
}//end create_user_message function

function print_message(){
    $message = session()->message;

    $html = '';
    if($message != '' || $message != NULL) {
        $html = '
        Toastify({
            text: "' . $message . '",
            offset: {
                y: 300 
            },
            duration: 3000,
            close:true,
            gravity:"top",
            position: "center",
            backgroundColor: "linear-gradient(to right, #E59103, #F0C603)",
        }).showToast();
        ';
    }//end if message exists
    session()->message = '';
    return $html;
}//end print_message function