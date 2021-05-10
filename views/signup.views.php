<div class="signup">
    <div id="app">
        <!-- no node js -->
        <!-- navbar sign up reference : Edmodo -->

        <!-- stepper - jm -->
        <div class="container" style="margin-bottom: 25px; margin-top: 30px;">
            <el-steps :active="active" finish-status="success" id="stepper">
                    <el-step title="Step 1" ></el-step>
                    <el-step title="Step 2"></el-step>
                    <el-step title="Step 3"></el-step>
                    <el-step title="Step 4"></el-step>
                    <el-step title="Step 5"></el-step>
            </el-steps>
            
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-6">
                    <div v-if="active == 0">
                        <img src="img/information.png" alt="" width="100%">
                    </div>
                    <div v-else-if="active == 1">
                        <img src="img/map1.png" alt="" width="100%">
                    </div>
                    <div v-else-if="active == 2">
                        <img src="img/courses.png" alt="" width="100%">
                    </div>
                    <div v-else-if="active == 3">
                        <img src="img/account.png" alt="" width="100%">
                    </div>
                    <div v-else-if="active == 4">
                        <img src="img/verification.png" alt="" width="100%">
                    </div>
                </div>
               
                <div class="col-md-6">
                    <el-card shadow="always" style="border-radius: 15px">
                        <div v-if="active == 0">
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
                                            type="number" 
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
                                        <el-radio v-model="radio.input" id="txtfemale" label="1">Female</el-radio>
                                        <el-radio v-model="radio.input" id="txtmale" label="2">Male</el-radio>
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
                        </div>
           
                        <div v-else-if="active == 1">
                            
                            <h4>PERSONAL INFORMATION</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Address:</label>
                                    </div>
                                    <div class="container-address">
                                        <div class="col-md">
                                            <el-input
                                                placeholder="House No. / Bldg No."
                                                v-model="task.address"
                                                id="txtaddress"
                                                clearable>
                                            </el-input>
                                        </div>
                                        <div class="col-md">
                                            <el-input
                                                placeholder="Street"
                                                v-model="task.street"
                                                id="txtstreet"
                                                clearable>
                                            </el-input>
                                        </div>
                                        <div class="col-md">
                                            <el-select v-model="value1" filterable placeholder="Province">
                                                <el-option
                                                    id="txtprovince"
                                                    v-for="item in options"
                                                    :key="item.value"
                                                    :label="item.label"
                                                    :value="item.value">
                                                </el-option>
                                            </el-select>
                                        </div>
                                        <div class="col-md">
                                            <el-select v-model="value2" filterable placeholder="Municipality">
                                                <el-option
                                                    id="txtmunicipality"
                                                    v-for="item in options"
                                                    :key="item.value"
                                                    :label="item.label"
                                                    :value="item.value">
                                                </el-option>
                                            </el-select>
                                        </div>
                                        <div class="col-md">
                                            <el-input
                                                placeholder="Zip Code"
                                                v-model="task.zipcode"
                                                id="txtzip"
                                                clearable>
                                            </el-input>
                                        </div>

                                    </div>    
                                </div>
                                <div style="display: inline; padding-left: 150px">
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="next">Next step</el-button>
                                </div>
                        </div>
      
                     <div v-else-if="active == 2">
                            
                            <h4>COURSE TO ENROLL</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Courses</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-select v-model="value3" filterable placeholder="Courses">
                                                <el-option
                                                    id="txtcourse"
                                                    v-for="item in options"
                                                    :key="item.value"
                                                    :label="item.label"
                                                    :value="item.value">
                                                </el-option>
                                        </el-select>      
                                    </div>   
                                </div>
                                <div style="display: inline; padding-left: 150px">
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="next">Next step</el-button>
                                </div>
                        </div>

                        <div v-else-if="active == 3">
                            
                            <h4>ACCOUNT</h4>
                                <div class="row">
                                        <div class="col-md-3">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <el-input
                                                placeholder="Enter your Email Address"
                                                v-model="task.email"
                                                id="txtemail"
                                                clearable>
                                            </el-input>
                                        </div>   
                                </div>
                                <div class="row">
                                    
                                        <div class="col-md-3">
                                            <label class="mt-2">Password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <el-input placeholder="Must be minimum of 6 alphanumeric keys" v-model="task.password" id="txtpassword" show-password></el-input>
                                        </div>  
                                    
                                </div>
                                <div class="row">
                                    
                                        <div class="col-md-3">
                                            <label>Confirm Password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <el-input placeholder="Must be minimum of 6 alphanumeric keys" v-model="task.confirm" id="txtconfirm" show-password></el-input>
                                        </div>  
                                    
                                </div>
                                <div style="display: inline; padding-left: 150px">
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="next">Next step</el-button>
                                </div>
                        </div>

                        <div v-else-if="active == 4">  
                            <h4>ACCOUNT VERIFICATION</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Code</label>
                                    </div>
                                    <div class="col-md-9" >
                                        <el-input 
                                            id="txtcode"
                                            type="number" 
                                            v-model="task.code" >
                                        </el-input>                            
                                    </div>  
                                </div>
                                <div style="display: inline; padding-left: 150px">
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="">Next step</el-button>
                                </div>
                        </div>
<!-- closing if rendering --> 
                        <p>Already have an account? <a href="#">Login</a> </p>
                    </el-card>
                </div>
            </div>
        </div>
    </div>
</div>