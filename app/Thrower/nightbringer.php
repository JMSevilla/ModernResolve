<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NightBringer\Request\Queries;



class Bulk  {
    public function NB_Province($table, $column) {
        $sql = "select distinct ".$column." from ".$table." ";
        return $sql;
    }
    public function NB_Selected_Province($table, $column){
        $sql = "select ".$column." ".$table." ";
        return $sql;
    }
    public function NB_CheckEmail($table, $column){
        $sql = "
        select email_address from ".$table." where email_address=:email
        ";
        return $sql;
    }
    public function NB_verifyattempts($table){
        $sql = "
        select * from ".$table." where email=:email
        ";
        return $sql;
    }
    public function NB_Detectverificationcode($table){
        $sql = "
        select email from ".$table." where email=:email and isdone=0
        ";
        return $sql;
    }
    public function NB_updateverification($table){
        $sql = "
        insert into ".$table." values(default, :vcode, :email, 0, 1, current_timestamp)
        ";
        return $sql;
    }
    public function NB_Sanitized_Update_verification_code($table){
        $sql = "
        update ".$table." set vcode=:code, sendattempt=sendattempt+1 where email=:email
        ";
        return $sql;
    }
   public function NB_verified_checker($table){
       $sql = "
        select vcode from ".$table." where vcode=:vcode and isdone=0
        ";
        return $sql;
   }
   public function NB_verified_user($table){
       $sql = "
        update ".$table." set isdone = 1 where vcode=:vcode
        ";
        return $sql;
   }
}