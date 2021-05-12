<?php

class Verify extends verificationController implements VerifyInterface, check_verification_health{
    public function verificationInterface($table){
        $data=[
            'vcode' => $_POST['sendcode'],
            'sendemail' => $_POST['email']
        ];
        // echo json_encode(array('checkemail' => $data));
        $callback = new verificationController();
        $callback->verifyController($table, "user", $data);
    }
    public function verify_health_code($table){
      $data=[
        'codeverifies' => $_POST['codeverifies']
      ];
      $callback = new verificationController();
      $callback->checkverified($table, $data);
    }
}
