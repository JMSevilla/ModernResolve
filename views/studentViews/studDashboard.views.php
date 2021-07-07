<!-- <div class="teacher"> -->
<div id="student">
    <?php include("libraries/resources/studentNavbar.php"); ?>
        <div class="container" style="margin-top: 20px" >
            <el-row :gutter="12">
                <div >
                    <el-button size="medium" style="width: 110px; padding: 10px"class="btnAddClass" type="primary" icon="el-icon-circle-plus" @click="joinclassdialogVisible = true">Join Class</el-button>
                    <?php include("libraries/resources/student/modalJoinClass.php") ?>
                </div>   
            </el-row>
            
            <div  >
                <el-row :gutter="12" style="margin-top: 20px; margin-bottom: 30px" >
                    <el-col :span="12" v-for="(item, index) in studclassname" >
                            <el-card shadow="always" style="; border-radius: 15px; border-top: 20px solid #79BBFF; margin-bottom: 50px; margin-left: 50px" :body-style="{ padding: '0px' }"  >
                                
                                    <div style="padding: 14px;">
                                        <p id="classname">
                                        {{item.name}} 
                                        </p>
                                            
                                        <p style="">
                                        Class Code:  {{item.code}}   
                                        </p>
                                    
                                        <div style="float:right; margin-bottom: 10px" >
                                            <el-button size="mini" plain icon="el-icon-view" @click="studbtnclassget(item.name, item.class_codeID, item.userID)" onclick="location.href= 'studentclassdash' " round  >View Class</el-button>
                                        </div>
                                        
                                    </div>    
                            </el-card>
                    </el-col>
                </el-row>
            </div>
    </div>
</div>
