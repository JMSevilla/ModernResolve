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

    }