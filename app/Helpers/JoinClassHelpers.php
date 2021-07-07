<?php 

    spl_autoload_register('joinclass_route');

    if(isset($_POST['joinclasstrigger']) == true) {
        
        JoinClassModel::joinclass_model();
    }
    
    function joinclass_route() {
        include_once "../Models/JoinClass.php";
        // include_once "../Providers/interface.php";
    }

