<h4>ACCOUNT VERIFICATION</h4>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="mt-2">Code</label>
                                    </div>
                                    <div class="col-md-10" >
                                        <el-input
                                            id="txtcode"
                                            type="number"
                                            v-model="task.code" >
                                        </el-input>
                                    </div>
                                </div>
                                <div style="display: inline">
                                    <center>
                                        <el-button type="primary" @click="previous">Previous</el-button>
                                        <el-button type="primary" @click="oncodeentry" v-on:click="isHide = true">Register</el-button>
                                    </center>
                                </div>
