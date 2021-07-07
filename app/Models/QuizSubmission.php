<?php
include_once "../Http/Controller/quizsubController.php";
class QuizSubmissionModel extends fetchquizsubController{
    public function fetchquizsub_model($table){
        $data = [
            'class_name' => $_POST['class_name']
        ];
        fetchquizsubController::fetchquizsub_class($table, $data);
    }

    public function fetchquizgrade_model($table){
        $data = [
            'scoreID' => $_POST['scoreID']
        ];
        fetchquizsubController::fetchquizgrade_class($table, $data);
    }

    public function gradedquiz_model($table){
        $data = [
            'score' => $_POST['score'],
            'scoreID' => $_POST['scoreID']
        ];
        fetchquizsubController::gradedquiz_controller($table, $data);
    }
}