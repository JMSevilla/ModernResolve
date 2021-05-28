<?php 

    include_once "../Http/Controller/addteacherController.php";

    class AddTeacherModel extends TeacherController implements ITeacher {

        public function addteacher_model($table) {
            $data = [
                'firstname' => $_POST['fname'],
                'lastname' => $_POST['lname'],
                'email_address' => $_POST['email'],
                'password' => $_POST['pass']
            ];

            TeacherController::teacher_add($table, $data);
        }
    }