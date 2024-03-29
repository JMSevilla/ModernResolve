<?php 

    include_once "../Http/Controller/assignmentController.php";

    class AssignmentModel extends AssignmentController {

        public function assignmentInsert_model($table) {
            $data = [
                'class_name' => $_POST['class_name'],
                'title' => $_POST['title'],
                'instruction' => $_POST['instruction'],
                'points' => $_POST['points'],
                'duedate' => $_POST['duedate'],
                'islock' => $_POST['islock'],
                'filename' => $_POST['filename']
            ];
            AssignmentController::assignmentInsert($table, $data);
        }     
        
        public function assignmentFetchTitle_model($table) {
            $data = [
                'class_name' => $_POST['class_name']
            ];
            // echo json_encode($data);
            AssignmentController::assignmentFetchTitle_controller($table, $data);
        }

        public function assignmentFetchQuestion_model($table) {
            $data = [
                'id' => $_POST['id']
            ];
            // echo json_encode($data);
            AssignmentController::assignmentFetchQuestion_controller($table, $data);
        }

        public function assignmentAnswerStud_model($table) {
            $data = [
                'questionfile' => $_POST['questionfile'],
                'answerfile' => $_POST['answerfile'],
                'userID' => $_POST['userID'],
                'assign_titleID' => $_POST['assign_titleID'],
                'score' => $_POST['score'],
                'status' => $_POST['status']
            ];

            AssignmentController::scoreID_assignment($table, $data);
        }
    }