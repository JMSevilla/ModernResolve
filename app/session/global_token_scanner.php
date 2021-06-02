<?php

if(isset($_POST['token_scanning']) == true){
    if(isset($_COOKIE['Token_Admin'])){
        echo json_encode('there is existing token admin');
    }
    else if(isset($_COOKIE['Token_Student'])){
        echo json_encode('there is existing token student');
    }
    else if(isset($_COOKIE['Token_Teacher'])){
        echo json_encode('there is existing token teacher');
    }
    else{
        echo json_encode('there is no existing token');
    }
}

if(isset($_POST['logtruncate']) == true){
    unset($_COOKIE['Token_Teacher']);
    echo json_encode("logout_teacher");
}