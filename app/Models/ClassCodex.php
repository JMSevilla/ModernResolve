<?php
include_once "../Http/Controller/classcodexController.php";
class Codex extends CodexController{
    public function codexhandler(){
        $data = [
            'class_name' => $_POST['classname'],
            'class_code' => $_POST['generatedClassCode'], 'class_current_user' => $_POST['currentUser']
        ];
        $this->codex_store("class_code", $data);
    }
}