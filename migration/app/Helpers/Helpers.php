<?php
spl_autoload_register('provide_root');
if(isset($_POST['userTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(userID int NOT NULL auto_increment, firstname varchar(255), lastname varchar(255) NOT NULL, birth_date datetime, age int, gender varchar(255), contact_number varchar(255), province varchar(255), municipality varchar(255), zip_code varchar(255), class_code varchar(255), address text, email_address varchar(255) unique, password varchar(255), is_verified char, is_type char, is_activate char, is_token_verified char, created_at datetime default current_timestamp, PRIMARY KEY (userID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['provinceTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(provinceID int NOT NULL auto_increment, province varchar(255), municipality varchar(255), created_at datetime default current_timestamp, PRIMARY KEY (provinceID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['courseTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(courseID int NOT NULL auto_increment, course_name varchar(255), subject varchar(255), school_year varchar(255), year varchar(255), session varchar(255), session_code varchar(255), teacherID int, studentID int, created_at datetime default current_timestamp, PRIMARY KEY (courseID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['classCodeTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(class_codeID int NOT NULL auto_increment, code varchar(255), created_at datetime default current_timestamp, PRIMARY KEY (class_codeID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['tokenTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(tokenID int NOT NULL auto_increment, itoken varchar(60000), userID int, is_valid char, date_expired datetime, created_at datetime default current_timestamp, PRIMARY KEY (tokenID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['verifierCode']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(codeID int NOT NULL auto_increment, vcode varchar(50), isdone char(1), created_at datetime default current_timestamp, PRIMARY KEY (codeID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
function provide_root(){
    include_once "../Route/webapi.php";
    $calls = new web_api();
    $calls->middleware("db.php", "Post.php", "postController.php", "queries.php", "PHPMailer.php", "SMTP.php", "Exception.php");
}