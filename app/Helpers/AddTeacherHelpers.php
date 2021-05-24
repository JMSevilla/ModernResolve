<?php 

    spl_autoload_register('teacher_route');

    if(isset($_POST['addTeacher']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::addteacher_model($table);
    }

    function teacher_route() {
        include_once "../Models/AddTeacher.php";
        include_once "../Providers/interface.php";
    }

