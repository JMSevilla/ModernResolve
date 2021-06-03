<?php 

    include_once "../Http/Controller/selectclasscodeTeacher.php";

    class TeacherCodeSelect extends TeacherClassCodeController implements ITeachCodeModel {

        public function teachclasscode_model($table) {
            $data = [
                'id' => $_POST['userID']
            ];

            TeacherCodeSelect::teachclasscode($table, $data);
        }

        public function classcodeget_model($table) {
            $data = [
                'name' => $_POST['classname']
            ];

            TeacherCodeSelect::classcodeget_controller($table, $data);
        }

    }