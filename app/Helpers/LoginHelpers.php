<?php 

    spl_autoload_register('login_route');

    if(isset($_POST['loginMethod']) == true) {
        LoginModel::loginuser_model($_POST['table']);
    }

    // if(isset($_POST['istypeMethod']) == true) {
    //     LoginModel::istypelogin_M($_POST['table']);
    // }

    function login_route() {
        include_once "../config/db.php";
        include_once "../Models/Login.php";
        include_once "../Providers/interface.php";
    }

