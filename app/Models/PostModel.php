<?php 

    include_once "../Http/Controller/teacherPostController.php";

    class PostModel extends TeacherPostController implements IPostModel {

        public function writepost_model($table) {
            $data = [
                'userID' => $_POST['userID'],
                'class_codeID' => $_POST['class_codeID'],
                'description' => $_POST['description'],
                'files' => $_POST['files'],
            ];

            TeacherPostController::writepost_controller($table, $data);
        }

        public function fetchpost_model($table) {
            $data = [
                'id' => $_POST['id']
            ];

            TeacherPostController::fetchpost_controller($table, $data);
        }

        public function editclass_model($table) {
            $data = [
                'id' => $_POST['id']
            ];

            TeacherPostController::editclass_controller($table, $data);
        }

        public function lockedclass_model($table) {
            $data = [
                'id' => $_POST['id'],
                'status' => $_POST['status']
            ];

            TeacherPostController::lockedclass_controller($table, $data);
        }

    }