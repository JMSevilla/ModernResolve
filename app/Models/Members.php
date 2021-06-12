<?php 

    include_once "../Http/Controller/teacherMembersController.php";

    class TeacherMembers extends TeacherMembersController {

        public function fetchingmembers_model($table) {
            $data = [
                'classcode_id' => $_POST['classcode_id'],
                'type' => $_POST['type']
            ];

            TeacherMembersController::fetchmembers($table, $data);
        }

        public function deletemembers_model($table) {
            $data = [
                'id' => $_POST['id'],
                'classcode_id' => $_POST['classcode_id']
            ];

            TeacherMembersController::deletemembers_controller($table, $data);
        }

    }