<?php

error_reporting(0);
if(!isset($_COOKIE['Token_Student']) || empty($_COOKIE['Token_Student'])){
    header("location: index");
    exit;
}