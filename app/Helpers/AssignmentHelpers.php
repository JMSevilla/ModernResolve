<?php 

    spl_autoload_register('assignment_route');

    if(isset($_POST['assignInsertTrigger']) == true) {
        $table = $_POST['table'];
        AssignmentModel::assignmentInsert_model($table);
    }

    if(isset($_POST['assignTitle_trig']) == true) {
        $table = $_POST['table'];
        AssignmentModel::assignmentFetchTitle_model($table);
    }

    if(isset($_POST['assignQuestion_trig']) == true) {
        $table = $_POST['table'];
        AssignmentModel::assignmentFetchQuestion_model($table);
    }

    if(isset($_POST['assignAnswer_trig']) == true) {
        $table = $_POST['table'];
        AssignmentModel::assignmentAnswerStud_model($table);
    }

    function assignment_route() {
        include "../Models/Assignment.php";
    }