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

        public function getprofadmin_model($table) {
            $data = [
                'email' => $_POST['email']
            ];

            TeacherController::getprofadmin($table, $data);
        }

        public function editprofadmin_model($table) {
            $data = [
                'email' => $_POST['email'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'birthdate' => $_POST['birthdate'],
                'age' => $_POST['age'],
                'gender' => $_POST['gender'],
                'contactnumber' => $_POST['contactnumber']
            ];

            TeacherController::editadminprofile($table, $data);
        }

        public function changepass_model($table) {
            $data = [
                'email' => $_POST['email'],
                'oldpass' => $_POST['oldpass'],
                'password' => $_POST['password']
            ];

            TeacherController::changepass_admin($table, $data);
        }

        public function insertprovince_model($table) {
            $data = [
                'province' => $_POST['province'],
                'municipality' => $_POST['municipality']
            ];

            TeacherController::insertprov_admin($table, $data);
        }

        public function getallprovmuni_model($table) {
            TeacherController::getall_prov_muni($table);
        }

        public function getbyIdAddress_model($table) {
            $data = [
                'id' => $_POST['id']
            ];

            TeacherController::getbyIdAddress_controller($table, $data);
        }

        public function updateaddressbyId_modal($table) {
            $data = [
                'id' => $_POST['id'],
                'province' => $_POST['province'],
                'municipality' => $_POST['municipality']
            ];

            TeacherController::updateaddressbyId_controller($table, $data);
        }

        public function deleteAddressbyId_model($table) {
            $data = [
                'id' => $_POST['id']
            ];

            TeacherController::deleteAddressbyId_controller($table, $data);
        }

    }