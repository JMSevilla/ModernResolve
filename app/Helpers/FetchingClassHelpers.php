<?php 

    spl_autoload_register('fetching_route');

    if(isset($_POST['fetchingClass']) == true) {
        $table = $_POST['table'];
        FetchingModel::fetching_model($table);
    }
    
    function fetching_route() {
        include_once "../Models/FetchingClass.php";
        // include_once "../Providers/interface.php";
    }

