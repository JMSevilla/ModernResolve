<?php 

    spl_autoload_register("members_route");

    if(isset($_POST['fetchingTrig']) == true) {
        $table = $_POST['table'];
        TeacherMembers::fetchingmembers_model($table);
    }

    if(isset($_POST['delMemberTrig']) == true) {
        $table = $_POST['table'];
        TeacherMembers::deletemembers_model($table);
    }

    if(isset($_POST['trueorfalse']) == true) {
        TeacherMembers::smplmodel();
    }

    function members_route() {
        include_once "../Models/Members.php";
        // include_once "../Providers/interface.php";
    }