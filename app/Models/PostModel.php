<?php 

    include_once "../Http/Controller/teacherPostController.php";

    class PostModel extends TeacherPostController implements IPostModel {

        public function writepost_model($table) {
            $data = [
                'uid' => $_POST['uid'],
                'ccid' => $_POST['ccid'],
                'description' => $_POST['description'],
                'files' => $_POST['files'],
            ];

            TeacherPostController::writepost_controller($table, $data);
        }

        public function fetchpost_model($table) {
            $data = [
                'name' => $_POST['name']
            ];

            TeacherPostController::fetchpost_controller($table, $data);
        }

        // public function editclass_model($table) {
        //     $data = [
        //         'id' => $_POST['id']
        //     ];

        //     TeacherPostController::editclass_controller($table, $data);
        // }

        public function lockedclass_model($table) {
            $data = [
                'id' => $_POST['id'],
                'status' => $_POST['status']
            ];

            TeacherPostController::lockedclass_controller($table, $data);
        }

    }