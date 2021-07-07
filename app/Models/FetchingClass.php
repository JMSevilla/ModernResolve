<?php
include_once "../Http/Controller/fetchclassController.php";
class FetchingModel extends fetchingController{
    public function fetching_model($table){
        $data = [
            'email' => $_POST['email']
        ];
        fetchingController::fetch_class($table, $data);
    }
}