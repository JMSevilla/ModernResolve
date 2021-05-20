<?php

class TokenUpdate extends TokenUpdateController{
    public function tokendateupdate($table){
        $this->patchByEmail($table, $_POST['email']);
    }
} 