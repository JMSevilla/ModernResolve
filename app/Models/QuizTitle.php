<?php 

    include_once "../Http/Controller/quiztitleController.php";

    class QuizTitleModel extends QuizTitleController{

        public function quiztitle_model($table) {
            $data = [
                'title' => $_POST['title'],
                'class_name' => $_POST['class_name'],
                'instruction' => $_POST['instruction'],
                'islock' => $_POST['islock'],
            ];

            QuizTitleController::quiztitle($table, $data);
        }

        public function quiztitlefetch_model($table) {
            $data = [
                'class_name' => $_POST['class_name']
            ];

            QuizTitleController::quizfetchtitle($table, $data);
        }

        public function takequiz_model($table) {
            $data = [
                'qid' => $_POST['qid'],
                'email' => $_POST['email']
            ];

            QuizTitleController::takequizController($table, $data);
        }

        public function savescore_model($table) {
            $data = [
                'titleID' => $_POST['titleID'],
                'userID' => $_POST['userID'],
                'score' => $_POST['score'],
                'status' => $_POST['status']
            ];

            QuizTitleController::savescoreController($table, $data);
        }
        
    }