<?php 

    spl_autoload_register('teacher_route');

    if(isset($_POST['addTeacher']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::addteacher_model($table);
    }

    if(isset($_POST['teacherD']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::deleteteacher_model($table);
    }
    
    if(isset($_POST['allT']) == true) {
        AddTeacherModel::getall_teacher_model();
    }

    if(isset($_POST['getId']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::getidT_model($table);
    }

    if(isset($_POST['updatePass']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::updatepassadmin_model($table);
    }

    function teacher_route() {
        include_once "../Models/AddTeacher.php";
        include_once "../Providers/interface.php";
    }

