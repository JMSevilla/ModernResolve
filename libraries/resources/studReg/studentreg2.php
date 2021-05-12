<?php

?>
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
                                        <select v-model="task.province" class="form-select" aria-label="Default select example">
                                        <option v-for="item in provinceTesting" :key="item.province">{{item.province}}</option>

                                        </select>
                                        </div>
                                        <div class="col-md">
                                        <select v-model="task.city" class="form-select" aria-label="Default select example">
                                        <option selected>City</option>
                                        <option value="Calamba">Calamba</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
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
                                <div style="display: inline;">
                                    <center>
                                    <el-button class="signupbtn" @click="previous">Previous</el-button>
                                    <el-button class="signupbtn" @click="next2">Next step</el-button>
                                    </center>
                                </div>
