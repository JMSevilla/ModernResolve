<?php 

    include_once "../Http/Controller/loginController.php";

    class LoginModel extends LoginController implements ILogin {

        public function loginuser_model($table) {
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'], 'oauth' => $_POST['oauthtoken']
            ];

            LoginController::loginuser_controller($table, $data);
        }

    }