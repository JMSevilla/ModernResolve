<h4>ACCOUNT</h4>
                                <div class="row">
                                        <div class="col-md-3">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <el-input
                                                type="email"
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
                                            <label class="mt-2">Confirm Password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <el-input placeholder="Must be minimum of 6 alphanumeric keys" v-model="task.confirm" id="txtconfirm" show-password></el-input>
                                        </div>  
                                    
                                </div>
                                <div style="display: inline">
                                    <center>
                                        <el-button type="primary" @click="previous">Previous</el-button>
                                        <el-button type="primary" @click="next_4">Next step</el-button>
                                    </center>
                                </div>