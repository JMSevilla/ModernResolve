<!-- <div class="teacher"> -->
<div id="teacher">
    <?php include("libraries/resources/userNavbar.php"); ?>
    <div class="container-fluid" style="background-color:#F8F9FA;">
        <div class="container" style="padding: 30px">
            
            <el-row :gutter="12">
            <div >
                <el-button size="medium" style="width: 110px; padding: 10px"class="btnAddClass" type="primary" icon="el-icon-circle-plus" @click="dialogVisible = true">Add Class</el-button>
                <?php include("libraries/resources/teacher/modalAddClass.php"); ?> 
            </div>   
            </el-row>

            <div>
                <el-row :gutter="12" style="margin-top: 20px; margin-bottom: 30px" >
                    <el-col :span="12" v-for="(item, index) in classname" >
                            <el-card shadow="always" id="classbox" :body-style="{ padding: '0px' }"  >
                                
                                    <div style="padding: 14px;">
                                        <p id="classname">
                                        {{item.name}} 
                                        </p>
                                            
                                        <p>
                                        Class Code:  {{item.code}}   
                                        </p>
                                    
                                        <div style="float:right; margin-bottom: 10px" >
                                            <el-button size="mini" id="viewclassbtn" plain icon="el-icon-view" @click="btnclassget(item.name, item.class_codeID, item.userID)" onclick="location.href= 'teacherclassdash'">View Class</el-button>
                                            <el-button size="mini" id="editclassbtn" plain icon="el-icon-edit" @click="EditdialogVisible = true, btnGETclass(item.name, item.class_codeID)">Edit Class</el-button>
                                            <?php include("libraries/resources/teacher/modalEditClass.php"); ?> 
                                        </div>
                                        
                                    </div>    
                            </el-card>
                    </el-col>
                </el-row>
            </div>
        </div>
    </div>
</div>
