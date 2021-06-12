<?php 

    include_once "../Http/Controller/teacherdashboardController.php";


    class TeacherDashboardModel extends TeacherDashController implements ITeacherModel {

        public function getpassteacher_model($table) {
            $data = [
                'email' => $_POST['email']
            ];

            TeacherDashController::getpassteacher_controller($table, $data);
        }

        public function updatePassTeacherDash_model($table) {
            $data = [
                'email' => $_POST['email'],
                'old' => $_POST['old'],
                'password' => $_POST['pass']
            ];

            TeacherDashController::updatePassTeacherDash_controller($table, $data);
        }

        public function updateProfileTeacherDash_model($table) {
            $data = [
                'email' => $_POST['email'],
                'firstname' => $_POST['fname'],
                'lastname' => $_POST['lname'],
                'birthdate' => $_POST['bdate'],
                'gender' => $_POST['sex'],
                'contact_number' => $_POST['contact'],
                'province' => $_POST['province'],
                'municipality' => $_POST['municipality'],
                'street' => $_POST['street']
            ];

            TeacherDashController::updateProfileTeacherDash_controller($table, $data);
        }

        // edit class name
        public function editclassnameteacher_model($table) {
            $data = [
                'value' => $_POST['value'],
                'c_user' => $_POST['c_user'],
                'classname' => $_POST['classname']
            ];

            TeacherDashController::editclassnameteacher_controller($table, $data);
        }

    }