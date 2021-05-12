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
<<<<<<< HEAD
                                        <option selected>Open this select menu</option>
=======
                                        <option selected>Province</option>
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                        </div>
                                        <div class="col-md">
                                        <select v-model="task.city" class="form-select" aria-label="Default select example">
<<<<<<< HEAD
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
=======
                                        <option selected>City</option>
                                        <option value="Calamba">Calamba</option>
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
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
<<<<<<< HEAD
                                    <el-button class="signupbtn" @click="next_2">Next step</el-button>
=======
                                    <el-button class="signupbtn" @click="next2">Next step</el-button>
                                    </center>
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
                                </div>