<?php 

    spl_autoload_register('code_route');

    if(isset($_POST['selectTrig']) == true) {
        TeacherCodeSelect::teachclasscode_model($_POST['table']);
    }

    if(isset($_POST['codeTrig']) == true) {
        TeacherCodeSelect::classcodeget_model($_POST['table']);
    }

    function code_route() {
        include_once "../Models/TeacherCodeSelect.php";
        include_once "../Providers/interface.php";
    }