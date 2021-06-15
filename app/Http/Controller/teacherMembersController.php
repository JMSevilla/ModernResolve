<?php 

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class TeacherMembersController extends DBIntegrate {

        public function fetchmembers($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::fetch_members($table));
            DBIntegrate::bind(':classcode_id', $data['classcode_id']);
            DBIntegrate::bind('type', $data['type']);
            if(DBIntegrate::ControllerExecutable()) {
                $row = DBIntegrate::controller_fetch_all();

                echo json_encode($row);
            }
        }

        public function deletemembers_controller($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::deletemembers_query($table));
            DBIntegrate::bind(':id', $data['id']);
            DBIntegrate::bind(':classcode_id', $data['classcode_id']);
            if(DBIntegrate::ControllerExecutable()) {
                echo DBIntegrate::SuccessJSONResponse();
            }
        }

        public function smpldt($data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::sampledata());
            DBIntegrate::bind(':title', $data['title']);
            DBIntegrate::bind(':instructions', $data['instructions']);
            DBIntegrate::bind(':ans1', $data['ans1']);
            DBIntegrate::bind(':ans2', $data['ans2']);
            DBIntegrate::bind(':value', $data['value']);
            DBIntegrate::bind(':question', $data['question']);
            DBIntegrate::bind(':score', $data['score']);
            DBIntegrate::bind(':quiztype', $data['quiztype']);
            if(DBIntegrate::ControllerExecutable()) {
                echo DBIntegrate::SuccessJSONResponse();
            }
        }

    }