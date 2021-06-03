<?php

error_reporting(0);
if(!isset($_COOKIE['Token_Admin']) || empty($_COOKIE['Token_Admin'])){
    header("location: index");
    exit;
}