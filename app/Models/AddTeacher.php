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

        public function getall_teacher_model() {
            TeacherController::getall_teacher();
        }

        public function deleteteacher_model($table) {
            $data = [
                'userID' => $_POST['userID']
            ];

            TeacherController::delete_teacher($table, $data);
        }

        public function getidT_model($table) {
            $data = [
                'id' => $_POST['id']
            ];

            TeacherController::getid_teacher($table, $data);
        }

        public function updatepassadmin_model($table) {
            $data = [
                'id' => $_POST['id'],
                'password' => $_POST['pass']
            ];

            TeacherController::updatepass_admin($table, $data);
        }

    }