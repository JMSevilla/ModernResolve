<?php
//    include_once 'app/config/db.php';
//    $check = new DBIntegration();
//    $query = "select distinct province from province";
    
?>
<h4>ADDRESS</h4>
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
                                        <el-select style="width: 100%;" @change="onprovince" v-model="task.province" filterable placeholder="Select province">
                                        <el-option
                                          v-for="item in provinceGetterss"
                                          :key="item.province"
                                          :label="item.province"
                                          :value="item.province">
                                        </el-option>
                                      </el-select>
                                        </div>
                                        <div class="col-md">
                                        <el-select style="width: 100%;" v-model="task.municipality" filterable placeholder="Select your municipality">
                                        <el-option
                                          v-for="item in options"
                                          :key="item.municipality"
                                          :label="item.municipality"
                                          :value="item.municipality">
                                        </el-option>
                                      </el-select>
                                        </div>
                                        <div class="col-md">
                                            <el-input
                                                type="number"
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
                                    <el-button type="primary" @click="previous">Previous</el-button>
                                    <el-button type="primary" @click="next2">Next step</el-button>
                                    </center>
                                </div>
