<!-- <div class="container" style="margin-bottom: 30px" > -->
<div class="row" >
            <el-tabs v-model="activeName">
                <el-tab-pane name="first">
                    <span slot="label"><i class="el-icon-s-custom" ></i> Teacher</span>
                    <el-form :label-position="labelPosition">
                    <el-form :model="ruleForm" status-icon :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm">
                        <el-form-item label="First Name" prop="fname">
                            <el-input v-model="ruleForm.fname" autocomplete="off"></el-input>
                        </el-form-item>    
                        <el-form-item label="Last Name" prop="lname">
                            <el-input v-model="ruleForm.lname" autocomplete="off"></el-input>
                        </el-form-item>
                        <el-form-item label="Email Address" prop="email">
                            <el-input type="email" v-model="ruleForm.email" autocomplete="off"></el-input>
                        </el-form-item>
                        <el-form-item label="Password" prop="pass">
                            <el-input type="password" v-model="ruleForm.pass" autocomplete="off" show-password></el-input>
                        </el-form-item>
                        <el-form-item label="Confirm" prop="checkPass">
                            <el-input type="password" v-model="ruleForm.checkPass" autocomplete="off" show-password></el-input>
                        </el-form-item>
                        <center>
                            <el-button style="width: 20%; padding: 10px;" type="primary" @click="submitForm('ruleForm')">Add</el-button>
                            <el-button style="width: 20%; padding: 10px;" @click="resetForm('ruleForm')">Reset</el-button>
                        </center>
                        </el-form>
                </el-tab-pane>
                
                <!-- <el-tab-pane name="second">
                    <span slot="label"><i class="el-icon-user-solid" ></i> Students</span>
                   
                </el-tab-pane>   -->
            </el-tabs>
            </div>
        <!-- </div> -->