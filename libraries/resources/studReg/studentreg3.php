<h4>COURSE TO ENROLL</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="mt-2">Courses</label>
                                    </div>
                                    <div class="col-md-9">
                                        <el-select v-model="value" filterable placeholder="Courses">
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
                                    <el-button class="signupbtn" @click="next_3">Next step</el-button>
                                </div>