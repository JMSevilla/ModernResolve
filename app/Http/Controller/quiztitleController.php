<?php

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class QuizTitleController extends DBIntegrate {

        public function quiztitle($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::quiz_title($table));
                DBIntegrate::bind(':title', $data['title']);
                DBIntegrate::bind(':class_name', $data['class_name']);
                DBIntegrate::bind(':instruction', $data['instruction']);
                DBIntegrate::bind(':islock', $data['islock']);
                if(DBIntegrate::ControllerExecutable()) {
                    // echo DBIntegrate::SuccessJSONResponse();
                    if(DBIntegrate::ControllerQuery('select max(titleID) as tID from quiz_title_map')){
                        if(DBIntegrate::ControllerExecutable()) {
                            $row = DBIntegrate::controller_fetch_row();
                            $titleID = $row['tID'];
                            QuizTitleController::insert_quizController($titleID);
                            echo json_encode($row);
                        }
                    }
                }
            }
        }
        
        public function insert_quizController($titleID){
            if(isset($_POST['quiztrigger']) == true) {
                $data = json_decode($_POST['data'], true);
                // $titleID = 20;
                echo json_encode($data);
                foreach($data as $req){
                    // $titleID = $req['titleID'];
                    $quiztype = $req['quiztype'];
                    $question = $req['question'];
                    $choice1 = $req['choice1'];
                    $choice2 = $req['choice2'];
                    $choice3 = $req['choice3'];
                    $choice4 = $req['choice4'];
                    $choice5 = $req['choice5'];
                    $points = $req['points'];
                    $answer = $req['answer'];
                    DBIntegrate::ControllerPrepare(lightBringerBulk::quiz('quiz'));
                    DBIntegrate::bind(':titleID', $titleID);
                    DBIntegrate::bind(':quiz_type', $quiztype);
                    DBIntegrate::bind(':question', $question);
                    DBIntegrate::bind(':choice1', $choice1);
                    DBIntegrate::bind(':choice2', $choice2);
                    DBIntegrate::bind(':choice3', $choice3);
                    DBIntegrate::bind(':choice4', $choice4);
                    DBIntegrate::bind(':choice5', $choice5);
                    DBIntegrate::bind(':points', $points);
                    DBIntegrate::bind(':answer', $answer);
        
                    if(DBIntegrate::ControllerExecutable()){
                        echo DBIntegrate::SuccessJSONResponse();
                    }
                    
                }
            }
        }

        public function quizfetchtitle($table, $data){
            DBIntegrate::ControllerPrepare(lightBringerBulk::fetch_quiz_title($table));
            DBIntegrate::bind(':class_name', $data['class_name']);
            if(DBIntegrate::ControllerExecutable()){
                $row = DBIntegrate::controller_fetch_all();
                echo json_encode($row);
            }
        }

        public function takequizController($table, $data){
            DBIntegrate::ControllerPrepare(lightBringerBulk::take_quiz_query($table));
            DBIntegrate::bind(':qid', $data['qid']);
            if(DBIntegrate::ControllerExecutable()){
                $row = DBIntegrate::controller_fetch_all();
                echo json_encode($row);
            }
        }

        public function savescoreController($table, $data){
            DBIntegrate::ControllerPrepare(lightBringerBulk::save_score_query($table));
            DBIntegrate::bind(':titleID', $data['titleID']);
            DBIntegrate::bind(':userID', $data['userID']);
            DBIntegrate::bind(':score', $data['score']);
            DBIntegrate::bind(':status', $data['status']);
            if(DBIntegrate::ControllerExecutable()){
                if(DBIntegrate::ControllerQuery('select max(scoreID) as score_ID from student_score')){
                    if(DBIntegrate::ControllerExecutable()){
                        $row = DBIntegrate::controller_fetch_row();
                        $scoreID = $row['score_ID'];
                        QuizTitleController::insert_quiz_answer_controller($scoreID);
                        echo json_encode($scoreID);
                    }                    
                }
            }
            
        }
        
        public function insert_quiz_answer_controller($scoreID){
            if(isset($_POST['dataAnsTrigger']) == true) {
                // echo json_encode($scoreID);
                $data = json_decode($_POST['dataAns'], true);
                echo json_encode($data);
                foreach($data as $req){
                    $quiz_type = $req['quiz_type'];
                    $question = $req['question'];
                    $choice1 = $req['choice1'];
                    $choice2 = $req['choice2'];
                    $choice3 = $req['choice3'];
                    $choice4 = $req['choice4'];
                    $choice5 = $req['choice5'];
                    $points = $req['points'];
                    $answer = $req['answer'];
                    $studanswer = $req['studanswer'];
                    DBIntegrate::ControllerPrepare(lightBringerBulk::insert_quizanswer_query('quiz_answer'));
                    DBIntegrate::bind(':scoreID', $scoreID);
                    DBIntegrate::bind(':quiz_type', $quiz_type);
                    DBIntegrate::bind(':question', $question);
                    DBIntegrate::bind(':choice1', $choice1);
                    DBIntegrate::bind(':choice2', $choice2);
                    DBIntegrate::bind(':choice3', $choice3);
                    DBIntegrate::bind(':choice4', $choice4);
                    DBIntegrate::bind(':choice5', $choice5);
                    DBIntegrate::bind(':points', $points);
                    // DBIntegrate::bind(':score_points', $score_points);
                    DBIntegrate::bind(':answer', $answer);
                    DBIntegrate::bind(':studanswer', $studanswer);
            
                    if(DBIntegrate::ControllerExecutable()){
                        echo DBIntegrate::SuccessJSONResponse();
                    }
                    
                }
            }
        }
        
    }
    