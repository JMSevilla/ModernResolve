<?php

include( nb_call('queries.php') );
class Verify extends verificationController implements VerifyInterface, check_verification_health{
    public function verificationInterface($table, $column){
        $data=[
            'vcode' => $_POST['sendcode'],
            'sendemail' => $_POST['email']
        ];
        // echo json_encode(array('checkemail' => $data));
        $callback = new verificationController();
        $callback->create($table, $data, $column);
    }
    public function verify_health_code($table){
      $data=[
        'codeverifies' => $_POST['codeverifies'], 'key' => $_POST['key']
      ];
      $callback = new verificationController();
      $callback->GetByEmail($table, $data);
    }
}
