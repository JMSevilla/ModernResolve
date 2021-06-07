<?php 

    spl_autoload_register('post_route');

    if(isset($_POST['writeTrig']) == true) {
        PostModel::writepost_model('post');
    }

    if(isset($_POST['fetchTrig']) == true) {
        PostModel::fetchpost_model('class_code');
    }

    if(isset($_POST['editclassTrig']) == true) {
        $table = $_POST['table'];
        PostModel::editclass_model($table);
    }

    if(isset($_POST['lockedTrig']) == true) {
        $table = $_POST['table'];
        PostModel::lockedclass_model($table);
    }

    function post_route() {
        include_once "../Models/PostModel.php";
        include_once "../Providers/teacherpostInterface.php";
    }