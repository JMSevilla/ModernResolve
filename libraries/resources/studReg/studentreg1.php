<h4>PERSONAL INFORMATION</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Class Code</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-input
                                            placeholder="Enter your Class code"
                                            v-model="task.classcode"
                                            id="txtclasscode"
                                            clearable>
                                        </el-input>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">First Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-input
                                            placeholder="Enter your First Name"
                                            v-model="task.fname"
                                            id="txtfname"
                                            clearable>
                                        </el-input>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Last Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-input
                                            placeholder="Enter your Last Name"
                                            v-model="task.lname"
                                            id="txtlname"
                                            clearable>
                                        </el-input>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Birthdate</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-date-picker
                                            width="500px"
                                            v-model="task.bdate"
                                            id="txtbdate"
                                            format="yyyy/MM/dd"
                                            value-format="yyyy/MM/dd"
                                            type="date"
                                            locale="en"
                                            placeholder="Select date and time">                                           
                                        </el-date-picker>
                                       
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Age</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-input 
                                            type="text" 
                                            v-model="task.age"  
                                            id="age"
                                            :min="16" :max="100">
                                        </el-input>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Gender</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-radio v-model="task.sex"  label="female">Female</el-radio>
                                        <el-radio v-model="task.sex"  label="male">Male</el-radio>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Contact Number</label>
                                    </div>
                                    <div class="col-md-9" >
                                        <el-input 
                                            type="number" 
                                            v-model.number="task.contact" 
                                            id="contact">
                                        </el-input>
                                                                  
                                    </div>  
                                </div>
                                <div style="display: inline; padding-left: 200px">
                                    <el-button class="signupbtn" @click="next">Next step</el-button>
                                </div>