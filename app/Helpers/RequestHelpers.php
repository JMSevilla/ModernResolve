<?php 

    spl_autoload_register("quiz_route");

    if(isset($_POST['quiztrigger']) == true) {
        $data = json_decode($_POST['data'], true);
        $titleID = 20;
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

    function quiz_route() {
        include_once "../config/db.php";
        include_once "../DataQuery/queries.php";
    }