<?php

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class AssignmentController extends DBIntegrate {
        

        public function assignmentInsert($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::insert_assignment_query($table));
                DBIntegrate::bind(':class_name', $data['class_name']);
                DBIntegrate::bind(':title', $data['title']);
                DBIntegrate::bind(':instruction', $data['instruction']);
                DBIntegrate::bind(':islock', $data['islock']);
                if(DBIntegrate::ControllerExecutable()) {
                    // echo DBIntegrate::SuccessJSONResponse();
                    if(DBIntegrate::ControllerQuery('select max(assign_titleID) as atID from assignment_title_map')){
                        if(DBIntegrate::ControllerExecutable()) {
                            $row = DBIntegrate::controller_fetch_row();
                            $assigntitleID = $row['atID'];
                            AssignmentController::insert_assignmentController($assigntitleID, $data);
                            echo json_encode($row);
                        }
                    }
                }
            }
        }   

        public function insert_assignmentController($assigntitleID, $data){            
            DBIntegrate::ControllerPrepare(lightBringerBulk::insert_assignmentTitle_query('assignment'));
            DBIntegrate::bind(':assigntitleID', $assigntitleID);
            DBIntegrate::bind(':points', $data['points']);
            DBIntegrate::bind(':duedate', $data['duedate']);
            DBIntegrate::bind(':filename', $data['filename']);

            if(DBIntegrate::ControllerExecutable()){
                echo DBIntegrate::SuccessJSONResponse();
            }
        }       

        public function assignmentFetchTitle_controller($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::fetchtitle_assign_query($table));
            DBIntegrate::bind('class_name', $data['class_name']);
            if(DBIntegrate::ControllerExecutable()) {
                if(DBIntegrate::controller_row()) {
                    $rowTitle = DBIntegrate::controller_fetch_all();
                    echo json_encode($rowTitle);
                }
            }
        }

        public function assignmentFetchQuestion_controller($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::fetchquestion_assign_query($table));
            DBIntegrate::bind('id', $data['id']);
            if(DBIntegrate::ControllerExecutable()) {
                if(DBIntegrate::controller_row()) {
                    $rowQuestion = DBIntegrate::controller_fetch_all();
                    echo json_encode($rowQuestion);
                }
            }
        }
}
   
    