<?php

class Verify extends verificationController implements VerifyInterface{
    public function verificationInterface($table){
        $data=[
            'vcode' => $_POST['sendcode'],
            'sendemail' => $_POST['email']
        ];
        // echo json_encode(array('checkemail' => $data));
        $callback = new verificationController();
        $callback->verifyController($table, "user", $data);
    }
}