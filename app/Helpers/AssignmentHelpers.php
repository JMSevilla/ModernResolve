<?php 

    spl_autoload_register('assignment_route');

    if(isset($_POST['assignInsertTrigger']) == true) {
        $table = $_POST['table'];
        AssignmentModel::assignmentInsert_model($table);
    }

    function assignment_route() {
        include "../Models/Assignment.php";
    }