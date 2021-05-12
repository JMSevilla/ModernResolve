<h4>COURSE TO ENROLL</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Courses</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select v-model="task.course" class="form-select" aria-label="Default select example">
                                        <option selected>Course</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>     
                                    </div>   
                                </div>
                                <div style="display: inline;">
                                    <center>
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="next_3">Next step</el-button>
                                </div>