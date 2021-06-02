<?php

error_reporting(0);
if(!isset($_COOKIE['Token_Teacher']) || empty($_COOKIE['Token_Teacher'])){
    header("location: index");
    exit;
}