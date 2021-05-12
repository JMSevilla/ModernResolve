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
                                    <el-button class="signupbtn" @click="oncodeentry">Next step</el-button>
                                </div>
