<?php 

    include_once "app/Http/Controller/courseController.php";

    $callback = new CourseController();
    $courses = $callback->get_course();
    // print_r($courses);

?>


<h4>COURSE TO ENROLL</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Courses</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select v-model="task.course" class="form-select" aria-label="Default select example">
                                        <option selected>Course</option>
                                        <?php foreach($courses as $course): ?>
                                            <option value="<?php echo $course['course_name'] ?>"><?php echo $course['course_name'] ?></option>
                                        <?php endforeach; ?>
                                        </select>     
                                    </div>   
                                </div>
                                <div style="display: inline;">
                                    <center>
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="next_3">Next step</el-button>
                                </div>