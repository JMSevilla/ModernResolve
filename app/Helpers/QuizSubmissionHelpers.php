<?php 

    spl_autoload_register('quizsub_route');

    if(isset($_POST['quizdatatableTrigger']) == true) {
        $table = $_POST['table'];
        QuizSubmissionModel::fetchquizsub_model($table);
    }

    if(isset($_POST['gradeTrigger']) == true) {
        $table = $_POST['table'];
        QuizSubmissionModel::fetchquizgrade_model($table);
    }
    
    if(isset($_POST['quizgradedTrigger']) == true) {
        $table = $_POST['table'];
        QuizSubmissionModel::gradedquiz_model($table);
    }

    function quizsub_route() {
        include_once "../Models/QuizSubmission.php";
        // include_once "../Providers/interface.php";
    }

