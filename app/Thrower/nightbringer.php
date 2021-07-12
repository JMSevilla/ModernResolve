<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



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
        insert into ".$table." values(default, :vcode, :email, 0, 1, 'noapi', current_timestamp)
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
        update ".$table." set isdone = 1, apikey=:key where vcode=:vcode
        ";
        return $sql;
   }


    // Emman
    public function NB_signupuser_query($table) {
        $sql = "
        insert into ".$table." values (default, :firstname, :lastname, :birth_date, :age, :gender, :contact_number, :province, :municipality, :zip_code,
        :address, :email_address, :password, :is_verified, :is_type, :is_activate, 0, 'noneapi', current_timestamp)
        ";
        // $sql = "
        //     CALL ".$table." (:firstname, :lastname, :birth_date, :age, :gender, :contact_number, :province, :municipality, :zip_code,
        //     :address, :email_address, :password, :is_verified, :is_type, :is_activate, 0, 'noneapi')
        // ";

        return $sql;
    }

    public function NB_firstuser($table) {
        $sql = "
            select * from user where is_type = 1
        ";

        return $sql;
    }

    public function NB_loginuser($table) {
        $sql = "
            select * from ".$table." where email_address = :email
        ";

        return $sql;
    }

    public function NB_teacheradd($table) {
        $sql = "
            CALL ".$table." (:firstname, :lastname, null, null, null, null, null, null, null,
            null, :email_address, :password, 1, 2, 1, 0, 'noneapi')
        ";

        return $sql;
    }

    public function NB_teacheremail() {
        $sql = "
            select email_address from user where email_address = :email
        ";

        return $sql;
    }

    public function NB_teacherdel($table) {
        $sql = "
            delete from ".$table." where userID = :id
        ";

        return $sql;
    }

    public function NB_allteacher() {
        $sql = "
            select * from user where is_type = '2'
        ";

        return $sql;
    }

    public function NB_getidteacher($table) {
        $sql = "
            select * from ".$table." where userID = :id
        ";

        return $sql;
    }

    public function NB_updatepassadmin($table) {
        $sql = "
            update ".$table." set password = :password where userID = :id
        ";

        return $sql;
    }

    public function NB_getprofadmin($table) {
        $sql = "
            select * from ". $table." where email_address = :email
        ";

        return $sql;
    }

    public function NB_editprofadmin($table) {
        $sql = "
            update ".$table." set firstname = :firstname, lastname = :lastname, 
            birth_date = :birthdate, gender = :gender, contact_number = :contactnumber where email_address = :email
        ";

        return $sql;
    }

    public function NB_checkemailad($table) {
        $sql = "
            select password from ".$table." where email_address = :email
        ";

        return $sql;
    }

    public function NB_changepassad($table) {
        $sql = "
            update ".$table." set password = :password where email_address = :email
        ";

        return $sql;
    }

    public function NB_inprov($table) {
        $sql = "
            insert into ".$table." values (default, :province, :municipality, current_timestamp)
        ";

        return $sql;
    }

    public function NB_getProvMuni($table) {
        $sql = "
            select * from $table
        ";

        return $sql;
    }

    public function NB_getbyIdAddress($table) {
        $sql = "
            select * from $table where provinceID = :id
        ";

        return $sql;
    }

    public function NB_editaddressbyid($table) {
        $sql = "
            update $table set province = :province, municipality = :municipality where provinceID = :id
        ";

        return $sql;
    }

    public function NB_deleteAddressbyId($table) {
        $sql = "
            delete from $table where provinceID = :id
        ";

        return $sql;
    }

    // Teacher dashboard
    public function NB_updateteachProfile($table) {
        $sql = "
            update $table set firstname = :firstname, lastname = :lastname, birth_date = :birth_date, gender = :gender, 
            contact_number = :contact_number, province = :province, municipality = :municipality, address = :address where email_address = :email           
        ";

        return $sql;
    }

    public function NB_classcodeselectteach($table) {
        $sql = "
            select class_code.name from $table 
            inner join class_code on class_code_map.class_codeID = class_code.class_codeID
            where userID = :userID
        ";

        return $sql;
    }

    public function NB_classcodeget($table) {
        $sql = "
            select class_codeID, code, status from $table where name = :name
        ";

        return $sql;
    }

    public function NB_writepost($table) {
        $sql = "
            insert into $table values (default, :uid, :ccid, :description, :files, current_timestamp)
        ";

        return $sql;
    }

    // public function NB_fetchpost($table) {
    //     $sql = "
    //         select concat(user.firstname, ' ',user.lastname) as fullname, class_code.name, post.created_at, post.description from $table
    //         inner join post on post.class_codeID = class_code.class_codeID
    //         inner join user on post.userID = user.userID
    //         where class_code.class_codeID = :id order by postID desc
    //     ";

    //     return $sql;
    // }

    //post in new teacher dash
    public function NB_fetchpost($table) {
        $sql = "
            select concat(user.firstname, ' ',user.lastname) as fullname, class_code.name, post.created_at, post.description from $table
            inner join post on post.class_codeID = class_code.class_codeID
            inner join user on post.userID = user.userID
            where class_code.name = :name order by postID desc
        ";

        return $sql;
    }

    public function NB_lockedclassname($table) {
        $sql = "
            update $table set status = :status where class_codeID = :id
        ";

        return $sql;
    }

    public function NB_fetchmembers($table) {
        $sql = "
            select u.userID, concat(u.firstname, ' ',u.lastname) as fullname, u.email_address as email from $table as cc 
            inner join user as u on cc.userID = u.userID
            where cc.class_codeID = :classcode_id and u.is_type = :type
        ";

        return $sql;
    }

    public function NB_deletemembers($table) {
        $sql = "
            delete from $table where userID = :id AND class_codeID = :classcode_id
        ";

        return $sql;
    }

    // public function NB_editclassname($table) {
    //     $sql = "
    //         update $table as cc 
    //         inner join class_code_map as ccm on cc.class_codeID = ccm.class_codeID
    //         inner join user as u on ccm.userID = u.userID
    //         set name = :classname 
    //         where cc.name = :value and u.email_address = :user
    //     ";

    //     return $sql;
    // }
    public function NB_editclss_query($table) {
        $sql = "
            update $table
            set name = :name 
            where class_codeID = :id
        ";

        return $sql;
    }


    // login token route
    // public function NB_istypeUser($table) {
    //     $sql = "
    //         select * from $table where email_address = :email
    //     ";

    //     return $sql;
    // }

    public function NB_token($table){
        $sql = "
        insert into ".$table." values(default, :token, :email, 1, 1, current_timestamp, now() + INTERVAL 7 DAY)
        ";
        return $sql;
    }
    public function NB_scantoken($table){
        $sql = "
        select * from ".$table." where email=:email
        ";
        return $sql;
    }
    public function NB_valid_token_updater($table){
        $sql = "
        update ".$table." set is_valid=0, isnew=0 where email=:email
        ";
        return $sql;
    }
    public function NB_current_date_updater_token($table){
        $sql = "
        update ".$table." set dateOfValidation=current_timestamp where email=:email
        ";
        return $sql;
    }
    public function NB_getClassCodeID($table){
      $sql = "
      select class_codeID from ".$table." where code=:code
      ";
      return $sql;
    }
    public function NB_getuserID($table){
      $sql = "
      select userID from ".$table." where email_address=:email
      ";
      return $sql;
    }
    public function NB_class_code_mapping_create($table){
      $sql = "
      insert into ".$table." values(default, :classID, :uid, current_timestamp)
      ";
      return $sql;
    }
    // user activation
    public function NB_uActivation($table){
        $sql = "
            update ".$table." set is_activate = :indicator where userID=:id
        ";  
        return $sql;
    }
    //adding class code
    public function NB_Add_ClassCode($table){
        $sql = " 
            insert into ".$table." values(default, :code, 'open', :name, current_timestamp)
        ";
        return $sql;
    }
    public function NB_GetLatestClassCode($table){
        $sql = "
            select max(class_codeID) as aydi from ".$table."
        ";
        return $sql;
    }
    public function NB_getcurrentuserid($table){
        $sql = "
            select userID from ".$table." where email_address=:emailadd
        ";
        return $sql;
    }
    public function NB_addclasscode_mapping($table){
        $sql = "
        insert into ".$table." values (default, :classcodeid, :userid, current_timestamp)
        ";
        return $sql;
    }
    //add new class in new teacher dash
    public function NB_fetchclass($table){
        $sql = "
        select u.userID, cc.class_codeID, cc.name, cc.code from class_code as cc
        inner join class_code_map as ccm on cc.class_codeID = ccm.class_codeID 
        inner join $table as u on ccm. userID = u. userID 
        where u.email_address = :email 
        ";
        return $sql;
    }

    //quiz in new teacher dash
    public function NB_quiz($table){
        $sql = "
        insert into ".$table." values (default,:titleID, :quiz_type, :question, :choice1, :choice2, :choice3, :choice4, :choice5, :points, :answer, '', current_timestamp )
        ";
        return $sql;
    }

    public function NB_quiz_title($table){
        $sql = "
        insert into ".$table." values (default, :title, :class_name, :instruction, :islock, current_timestamp)
        ";
        return $sql;
    }

    //join class in new student dash
    public function NB_join_class($table, $column, $joinclass){
        $sql = "
        select $column from ".$table." where $joinclass = :joinclass
        ";
        return $sql;
    }

    public function NB_insert_join_class($table){
        $sql = "
        insert into ".$table." values (default, :class_codeID, :userID ,current_timestamp)
        ";
        return $sql;
    }

    public function NB_fetch_quiztitle($table){
        $sql = "
        select * from ".$table." where class_name=:class_name
        ";

        return $sql;
    }

    public function NB_takequiz($table){
        $sql = "
        select qt.*,q.* from $table as qt
        inner join quiz as q on qt.titleID = q.titleID
        where qt.titleID=:qid
        ";
        return $sql;
    }
    public function NB_done_quiz_query($table) {
        $sql = "
            select ss.score, ss.created as submitdate, ss.status, qtm.*, u.*
            from $table as ss
            inner join quiz_title_map as qtm on ss.titleID = qtm.titleID
            inner join user as u on ss.userID = u.userID
            where ss.titleID = :qid and u.email_address = :email
        ";
        return $sql;
    }

    public function NB_savescore($table){
        $sql = "
        insert into ".$table." values (default, :titleID, :userID ,:score, :status, current_timestamp)
        ";
        return $sql;
    }

    public function NB_fetch_quizsub($table){
        $sql = "
        select qtm.*, concat(u.firstname,' ',u.lastname) as fullname, ss.* from $table as ss
        inner join quiz_title_map as qtm on ss.titleID = qtm.titleID
        inner join user as u on ss.userID = u. userID 
        where qtm.class_name = :class_name
        ";
        return $sql;
    }

    public function NB_insert_quizanswer($table){
        $sql = "
        insert into ".$table." values (default, :scoreID, :quiz_type ,:question, :choice1, 
        :choice2, :choice3, :choice4, :choice5, :points, 0, :answer, :studanswer, current_timestamp)
        ";
        return $sql;
    }

    public function NB_fetch_quizgrade($table){
        $sql = "
        select * from $table where scoreID = :scoreID
        ";
        return $sql;
    }

    public function NB_gradedquiz_query($table){
        // $sql = "
        // update $table set score = :score
        // where scoreID = :scoreID
        // ";
        $sql = "
        select score from $table where scoreID = :scoreID
        ";

        return $sql;
    }

    public function NB_insert_assignment($table){
        $sql = "
        insert into ".$table." values (default,:class_name, :title, :instruction, :islock, current_timestamp )
        ";
        return $sql;
    }

    public function NB_insert_assignmentTitle($table){
        $sql = "
        insert into ".$table." values (default,:assigntitleID, :duedate, :points, :filename, current_timestamp )
        ";
        return $sql;
    }
}