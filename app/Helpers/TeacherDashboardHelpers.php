<?php 

    spl_autoload_register('teacherdash_route');

    if(isset($_POST['getemailT']) == true) {
        $table = $_POST['table'];
        TeacherDashboardModel::getpassteacher_model($table);
    }

    if(isset($_POST['editpassT']) == true) {
        $table = $_POST['table'];
        TeacherDashboardModel::updatePassTeacherDash_model($table);
    }

    if(isset($_POST['editprofT']) == true) {
        $table = $_POST['table'];
        TeacherDashboardModel::updateProfileTeacherDash_model($table);
    }

    // edit class name
    if(isset($_POST['editclassTrig']) == true) {
        $table = $_POST['table'];
        TeacherDashboardModel::editclassnameteacher_model($table);
    }

    function teacherdash_route() {
        include_once "../Models/TeacherDashboard.php";
        include_once "../Providers/interface.php";
    }
