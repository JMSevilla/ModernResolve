<?php 

    spl_autoload_register('quiztitle_route');

    if(isset($_POST['quiztitletrigger']) == true) {
        $table = $_POST['table'];
        QuizTitleModel::quiztitle_model($table);
    }
    if(isset($_POST['quiz_fetchTrigger']) == true) {
        $table = $_POST['table'];
        QuizTitleModel::quiztitlefetch_model($table);
    }

    if(isset($_POST['takequiztrigger']) == true) {
        $table = $_POST['table'];
        QuizTitleModel::takequiz_model($table);
    }

    if(isset($_POST['scoredataTrigger']) == true) {
        $table = $_POST['table'];
        QuizTitleModel::savescore_model($table);
    }

    function quiztitle_route() {
        include_once "../Models/QuizTitle.php";
        // include_once "../Providers/interface.php";
    }

