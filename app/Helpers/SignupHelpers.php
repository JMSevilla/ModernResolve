<?php 

    // Emman
    spl_autoload_register('signup_route');

    if(isset($_POST['signupMethod']) == true) {
        $table = 'sproc_insert';
        SignupModel::signup_model($table);
    }

    function signup_route() {
        include_once "../config/db.php";
        include_once "../Models/Signup.php";
        include_once "../Providers/interface.php";
    }