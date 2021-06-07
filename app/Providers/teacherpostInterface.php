<?php 

interface ITeacherPostInterface {
    public function writepost_controller($table, $data);
    public function fetchpost_controller($table, $data);
    public function editclass_controller($table, $data);
    public function lockedclass_controller($table, $data);
}

interface IPostModel {
    public function writepost_model($table);
    public function fetchpost_model($table);
    public function editclass_model($table);
    public function lockedclass_model($table);
}