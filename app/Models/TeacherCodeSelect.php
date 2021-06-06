<?php 

    include_once "../Http/Controller/selectclasscodeTeacher.php";

    class TeacherCodeSelect extends TeacherClassCodeController implements ITeachCodeModel {

        public function teachclasscode_model($table) {
            $data = [
                'id' => $_POST['userID']
            ];

            TeacherClassCodeController::teachclasscode($table, $data);
        }

        public function classcodeget_model($table) {
            $data = [
                'name' => $_POST['classname']
            ];

            TeacherClassCodeController::classcodeget_controller($table, $data);
        }

    }