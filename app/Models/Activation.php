<?php

include_once "../Http/Controller/activationController.php";

class userActivationModel extends activationController{
    public function hold($id, $indicator){
        if($indicator == 0){
            $indicator = "0";
            $call = new activationController();
            $call->patchById($id, $indicator);
        } else {
            $indicator = "1";
            $call = new activationController();
            $call->patchById($id, $indicator);
        }
    }
}