<?php
include_once "../Http/Controller/joinclassController.php";
class JoinClassModel extends JoinclassController{
    public function joinclass_model(){
        $data = [
            'email' => $_POST['email'],
            'classcode' => $_POST['classcode']
        ];
        JoinclassController::join_class($data);
    }
}