<?php

// include( nightbringer("nightbringer.php") );

include_once("../Thrower/nightbringer.php");

class lightBringerBulk extends Bulk{
    public function models_check(){
  $sql = "show tables like :mytable";
  return $sql;
}

public function sampledata() {
  $sql = "
    insert into sampledata values (default, :title, :instructions, :ans1, :ans2, :value, :question, :score, :quiztype)
  ";

  return $sql;
}

public function iModel_tableCreation($table){
  $sql = "
  create table if not exists ". $table ." (id int(11) not null auto_increment primary key, firstname varchar(100), createdat datetime default current_timestamp)
  ";
  return $sql;
}

public function iController_Insertion($table){
  $sql = "
  insert into ". $table ." values(default, :fname, current_timestamp)
  ";
  return $sql;
}

// emman
public function iController_CreateUser($table) {
  $sql = "
    INSERT INTO ".$table." VALUES(default, :classcode, :firstname, :lastname, :birthdate, :age, :contact, :address, :province, :city,
    :street, :zipcode, :email, :password, :sex, :course, :code, current_timestamp)";
    return $sql;
}

public function classcodeCheckup($table){
  $sql = "
  select code from ".$table." where code=:code and status='open'
  ";
  return $sql;
}

public function verificationCodeEntry($table){
  return Bulk::NB_updateverification($table);
}

public function checkemailifexist($table, $column){
  return Bulk::NB_CheckEmail($table, $column);
}

public function detectVerificationCode($table){
  return Bulk::NB_Detectverificationcode($table);
}

public function sanitized_update_verification_code($table){
  return Bulk::NB_Sanitized_Update_verification_code($table);
}

public function sanitized_sendAttempts($table){
  return Bulk::NB_verifyattempts($table);
}

public function sanitized_select_province($table){
  $sql = "
  select distinct province from ".$table."
  ";
  return $sql;
}

public function verified_checker($table){
  return Bulk::NB_verified_checker($table);
}

public function verifieduser($table){
  return Bulk::NB_verified_user($table);
}

public function selectedProvinceQuery($table, $column){
    return Bulk::NB_Selected_Province($table, $column);
}

public function GetAll($table, $column){
    return Bulk::NB_Province($table, $column);
}

// Tokenization
public function tokenMigrate($table){
  return BULK::NB_token($table);
}

public function tokenExpiry($table){
 return BULK::NB_scantoken($table);
}

public function valid_token_updater($table){
  return BULK::NB_valid_token_updater($table);
}

public function date_valid_token($table){
  return BULK::NB_current_date_updater_token($table);
}

// Emman
public function signupuser_query($table) {
  return BULK::NB_signupuser_query($table);
}

public function firstuser_query($table) {
  return BULK::NB_firstuser($table);
}

public function loginuser_query($table) {
  return BULK::NB_loginuser($table);
}

public function teacheradd_query($table) {
  return BULK::NB_teacheradd($table);
}
public function checkemail_query() {
  return BULK::NB_teacheremail();
}

public function teacherdel_query($table) {
  return BULK::NB_teacherdel($table);
}

public function allteacher_query() {
  return BULK::NB_allteacher();
}

public function getidteacher_query($table) {
  return BULK::NB_getidteacher($table);
}

public function Upassadmin_query($table) {
  return BULK::NB_updatepassadmin($table);
}

public function getprofad_query($table) {
  return BULK::NB_getprofadmin($table);
}

public function editadminprofile_query($table) {
  return BULK::NB_editprofadmin($table);
}

public function checkemailad_query($table) {
  return BULK::NB_checkemailad($table);
}

public function changepassad_query($table) {
  return BULK::NB_changepassad($table);
}

public function inprov_query($table) {
  return BULK::NB_inprov($table);
}

public function getprovmuni_query($table) {
  return BULK::NB_getProvMuni($table);
}

public function getbyIdAddress_query($table) {
  return BULK::NB_getbyIdAddress($table);
}

public function updatebyIdAddress_query($table) {
  return BULK::NB_editaddressbyid($table);
}

// teacher dashboard
public function updateteachProfile_query($table) {
  return BULK::NB_updateteachProfile($table);
}

public function deleteAddressbyId_query($table) {
  return BULK::NB_deleteAddressbyId($table);
}

public function classcodeselectteach_query($table) {
  return BULK::NB_classcodeselectteach($table);
}
 
public function classcodeget_query($table) {
  return BULK::NB_classcodeget($table);
}

public function writepost_query($table) {
  return BULK::NB_writepost($table);
}

public function fetchpost_query($table) {
  return BULK::NB_fetchpost($table);
}

public function lockedclassname_query($table) {
  return BULK::NB_lockedclassname($table);
}

public function fetch_members($table) {
  return BULK::NB_fetchmembers($table);
}

public function deletemembers_query($table) {
  return BULK::NB_deletemembers($table);
}

// edit class name
public function editclassname_query($table) {
  return BULK::NB_editclassname($table);
}

// login token route
// public function istypeUser($table) {
//   return BULK::NB_istypeUser($table);
// }

//Class Code ID Mapping
public function classCodeMapping($table){
  return BULK::NB_getClassCodeID($table);
}

public function userIDGetter($table){
  return BULK::NB_getuserID($table);
}
public function create_classcode_mapping($table){
  return BULK::NB_class_code_mapping_create($table);
}
//user activation
public function user_activation($table){
  return BULK::NB_uActivation($table);
}
//adding class query
public function add_dynamic_classcode($table){
  return BULK::NB_Add_ClassCode($table);
}
//get max id for class code
public function get_maxID_classcode($table){
  return BULK::NB_GetLatestClassCode($table);
}
public function get_current_userID($table){
  return BULK::NB_getcurrentuserid($table);
}
//add class code mapping
public function add_class_code_mapping($table){
  return BULK::NB_addclasscode_mapping($table);
}

//add new class in new teacher dash
public function fetchclass($table){
  return BULK::NB_fetchclass($table);
}

//quiztype in new teacher dash
public function quiz($table){
  return BULK::NB_quiz($table);
}

//quiz in new teacher dash
public function quiz_title($table){
  return BULK::NB_quiz_title($table);
}

//joinclass in new student dash
public function join_classID($table, $column, $joinclass){
  return BULK::NB_join_class($table, $column, $joinclass);
}
public function insert_class($table){
  return BULK::NB_insert_join_class($table);
}
public function fetch_quiz_title($table){
  return BULK::NB_fetch_quiztitle($table);
}

public function take_quiz_query($table){
  return BULK::NB_takequiz($table);
}

public function save_score_query($table){
  return BULK::NB_savescore($table);
}

public function fetch_quizsub_query($table){
  return BULK::NB_fetch_quizsub($table);
}

public function insert_quizanswer_query($table){
  return BULK::NB_insert_quizanswer($table);
}

public function fetch_quizgrade_query($table){
  return BULK::NB_fetch_quizgrade($table);
}

public function gradedquiz_query($table){
  return BULK::NB_gradedquiz_query($table);
}
}