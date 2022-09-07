<?php

function create_user_message($text = '', $type = '') {
    $color1 = '#717D7E';
    $color2 = '#AAB7B8';

    switch ($type) {
        case 'warning':
            $color1 = '#E59103';
            $color2 = '#F0C603';
            break;

        case 'success':
            $color1 = '#0BC64E';
            $color2 = '#36D46F';
            break;

        case 'error':
            $color1 = '#CC0000';
            $color2 = '#EE3030';
            break;
        
        default:
            # code...
            break;
    }

    $message_data = array(
        'text' => $text,
        'color1' => $color1,
        'color2' => $color2
    );
    
    session()->set('message', $message_data);
}//end create_user_message function

function print_message(){
    $message_data = session()->message;

    $html = '';
    if($message_data != '' || $message_data != NULL) {
        $html = '
        Toastify({
            text: "' . $message_data['text'] . '",
            offset: {
                y: 300 
            },
            duration: 3000,
            close:true,
            gravity:"top",
            position: "center",
            backgroundColor: "linear-gradient(to right, '.$message_data['color1'].', '.$message_data['color2'].')",
        }).showToast();
        ';
    }//end if message_data exists

    session()->message = '';
    return $html;
}//end print_message function