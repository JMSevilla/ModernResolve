<?php
use Illuminate\VerificationRequest\verificationController;
use Providers\DataInterface\VerifyInterface, Providers\DataInterface\check_verification_health;
class Verify extends verificationController implements VerifyInterface, check_verification_health{
    public function verificationInterface($table, $column){
        $data=[
            'vcode' => $_POST['sendcode'],
            'sendemail' => $_POST['email']
        ];
        // echo json_encode(array('checkemail' => $data));
        $callback = new verificationController();
        $callback->verifyController($table, $data, $column);
    }
    public function verify_health_code($table){
      $data=[
        'codeverifies' => $_POST['codeverifies']
      ];
      $callback = new verificationController();
      $callback->checkverified($table, $data);
    }
}
