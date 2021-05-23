<?php

    // Emman
    include_once "../Http/Controller/signupController.php";

    class SignupModel extends SignupController implements ISignupModel {

        public function signup_model($table) {
            $data = [
                'firstname' => $_POST['fname'],
                'lastname' => $_POST['lname'],
                'birth_date' => $_POST['bdate'],
                'age' => $_POST['age'],
                'gender' => $_POST['sex'],
                'contact_number' => $_POST['contact'],
                'province' => $_POST['province'],
                'municipality' => $_POST['municipality'],
                'zip_code' => $_POST['zipcode'],
                'class_code' => $_POST['classcode'],
                'address' => $_POST['address'],
                'email_address' => $_POST['email'],
                'password' => $_POST['password'],
            ];

            SignupController::signupuser_controller($table, $data);
        }

    }
