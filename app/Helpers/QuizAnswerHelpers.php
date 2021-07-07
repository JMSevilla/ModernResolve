<?php

include_once "../config/db.php";
include_once "../DataQuery/queries.php";

if(isset($_POST['dataAnsTrigger']) == true) {
    $data = json_decode($_POST['dataAns'], true);
    $scoreID = $_POST['scoreID'];
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
        DBIntegrate::bind(':answer', $answer);
        DBIntegrate::bind(':studanswer', $studanswer);

        if(DBIntegrate::ControllerExecutable()){
            echo DBIntegrate::SuccessJSONResponse();
        }
        
    }
}
