<?php

    // Emman
    spl_autoload_register('course_route');

    class CourseController extends DBIntegration {

        public function get_course() {
            if($stmt = $this->ControllerPrepare(get_course_query())) {
                if($this->ControllerExecutable()) {
                    if($this->controller_row()) {
                        $courses = $stmt->fetchall();

                        return $courses;
                    }
                }
            }
        }

    }

    function course_route() {
        include_once "app/config/db.php";
        include_once "app/DataQuery/queries.php";
    }