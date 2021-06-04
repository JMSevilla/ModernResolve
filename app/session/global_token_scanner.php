<?php

if(isset($_POST['token_scanning']) == true){
    if(isset($_COOKIE['Token_Admin'])){
        echo json_encode(array(
            'admin' => 'exist'
        ));
    }
    else if(isset($_COOKIE['Token_Student'])){
        echo json_encode(array(
            'student' => 'exist'
        ));
    }
    else if(isset($_COOKIE['Token_Teacher'])){
        echo json_encode(array(
            'teacher' => 'exist'
        ));
    }
    else{
        echo json_encode('there is no existing token');
    }
}

if(isset($_POST['logtruncate']) == true){
    unset($_COOKIE['Token_Teacher']);
    setcookie('Token_Teacher', null, -1, '/');
    echo json_encode(array(
        'logs' => 'logout'
    ));
}

if(isset($_POST['logtruncateAdmin']) == true){
    unset($_COOKIE['Token_Admin']);
    setcookie('Token_Admin', null, -1, '/');
    echo json_encode(array(
        'logs' => 'logout'
    ));
}
