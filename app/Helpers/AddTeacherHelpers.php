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

    if(isset($_POST['getadmin']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::getprofadmin_model($table);
    }

    if(isset($_POST['editprofad']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::editprofadmin_model($table);
    }

    if(isset($_POST['chngpss']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::changepass_model($table);
    }

    if(isset($_POST['addprov']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::insertprovince_model($table);
    }

    if(isset($_POST['provT']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::getallprovmuni_model($table);
    }

    if(isset($_POST['addressGet']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::getbyIdAddress_model($table);
    }

    if(isset($_POST['editAd']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::updateaddressbyId_modal($table);
    }

    if(isset($_POST['deleteAd']) == true) {
        $table = $_POST['table'];
        AddTeacherModel::deleteAddressbyId_model($table);
    }
    
    function teacher_route() {
        include_once "../Models/AddTeacher.php";
        include_once "../Providers/interface.php";
    }

