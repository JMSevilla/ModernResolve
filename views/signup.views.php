<div class="signup">
    <div id="app">
        <!-- no node js -->
        <!-- navbar sign up reference : Edmodo -->

        <!-- stepper - jm -->
        <div class="container" style="margin-top: 30px; margin-bottom: 30px">
            <el-steps :active="active" finish-status="success" id="stepper" align-center>
                    <el-step title="Personal Information" ></el-step>
                    <el-step title="Address"></el-step>
                    <el-step title="Credentials"></el-step>
                    <el-step title="Account Verification"></el-step>              
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
                        <img src="img/account.png" alt="" width="100%">
                    </div>
                    <div v-else-if="active == 3">
                        <img src="img/verification.png" alt="" width="100%">
                    </div>
                    <div v-else-if="active == 4">
                      <img src="https://cdn.dribbble.com/users/2417352/screenshots/15567742/media/b50bb568968bee50d16250f94307eb87.png?compress=1&resize=1000x750" width="100%" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <el-card shadow="always" style="border-radius: 25px; box-shadow: rgba(0, 0, 0, 0.14) 0px 10px 36px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 1px;">
                        <div v-if="active == 0">
                            <?php include("libraries/resources/studReg/studentreg1.php"); ?>
                        </div>

                        <div v-else-if="active == 1">
                        <?php include("libraries/resources/studReg/studentreg2.php"); ?>
                        </div>

                        <div v-else-if="active == 2">

                        <?php include("libraries/resources/studReg/studentreg4.php"); ?>
                        </div>

                        <div v-else-if="active == 3">
                        <?php include("libraries/resources/studReg/studentreg5.php"); ?>
                        </div>

                        <div v-else-if="active == 4">
                        <?php include("libraries/resources/studReg/finish.php"); ?>
                        </div>
<!-- closing if rendering -->
                        <p v-if="!isHide">Already have an account? <a href="login">Login</a> </p> 

                    </el-card>

                </div>
            </div>
        </div>
    </div>
</div>
