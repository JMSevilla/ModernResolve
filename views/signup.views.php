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
                            <?php include("libraries/resources/studReg/studentreg1.php"); ?>
                        </div>
           
                        <div v-else-if="active == 1">
                        <?php include("libraries/resources/studReg/studentreg2.php"); ?>
                        </div>
      
                     <div v-else-if="active == 2">
                            
                     <?php include("libraries/resources/studReg/studentreg3.php"); ?>
                        </div>

                        <div v-else-if="active == 3">
                            
                        <?php include("libraries/resources/studReg/studentreg4.php"); ?>
                        </div>

                        <div v-else-if="active == 4">  
                        <?php include("libraries/resources/studReg/studentreg5.php"); ?>
                        </div>
<!-- closing if rendering --> 
                        <p>Already have an account? <a href="#">Login</a> </p>
                    </el-card>
                </div>
            </div>
        </div>
    </div>
</div>