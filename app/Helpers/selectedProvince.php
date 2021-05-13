<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Bridge\Routing\web_api;

spl_autoload_register("route_selection_province");
if(isset($_POST['provinceTrigger']) == true){
    $callback = new Province();
    $callback->provinceModels("from province where province=:province", "municipality");
}
if(isset($_POST['loadProvinceTrigger']) == true){
    $callback = new Province();
    $callback->lodash($_POST['table'], "province");
    
}
function route_selection_province(){
    include_once "../Route/webapi.php";
    $callback = new web_api();
    $callback->middleware("db.php", "Province.php", "provinceController.php", "queries.php", 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'interface.php', 'nightbringer.php');
}