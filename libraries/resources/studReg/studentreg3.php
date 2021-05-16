<?php 

    // include_once "app/Http/Controller/courseController.php";

    // $callback = new CourseController();
    // $courses = $callback->get_course();
    // print_r($courses);
    // foreach($courses as $course):
        
    // endforeach;
?>


<h4>COURSE TO ENROLL</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Courses</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select v-model="task.course" class="form-select" aria-label="Default select example">
                                        <option selected>Course</option>
                                        
                                        </select>     
                                    </div>   
                                </div>
                                <div style="display: inline;">
                                    <center>
                                        <el-button type="primary" @click="previous">Previous</el-button>
                                        <el-button type="primary" @click="next_3">Next step</el-button>
                                    </center>
                                </div>