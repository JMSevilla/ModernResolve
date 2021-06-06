<!-- <div class="teacher"> -->
 <div id="teacher">
    <?php include("libraries/resources/userNavbar.php"); ?>
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row justify-content-center pt-1" style="margin: 0 -60px 0 -50px">
                                        <div class="col-md-4" >
                                            <template>
                                                <el-select id="select" v-model="value" @change="getcodeteacher()" clearable placeholder="Select Class Name">
                                                    <el-option
                                                    v-for="item in options"
                                                    :key="item.name"
                                                    :label="item.name"
                                                    :value="item.name">
                                                    </el-option>
                                                </el-select>
                                            </template>
                                        </div>
                                        <div class="col-md-3" style="margin-top: 15px">
                                            <label for="" style="color: gray;">Class Code:</label>
                                            <span style="margin-right: 10px">{{ teacherclasscode }}</span>
                                            <!-- <div class="onoffswitch" v-if="status == 'open'">
                                                <input @click="locked(post.class_codeID)" type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                            <div class="onoffswitch" v-else>
                                                <input @click="unlocked(post.class_codeID)" type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0">
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div> -->
                                            <div v-if="status == 'open'">
                                            <el-button @click="locked(post.class_codeID)" type="danger" plain round size="mini">Locked</el-button>
                                            </div>
                                            <div v-else>
                                            <el-button @click="unlocked(post.class_codeID)" type="success" plain round size="mini">Unlocked</el-button>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="container">
                                                <div class="d-flex" style="justify-content: flex-end;">
                                                    <div>
                                                        <el-button size="medium" style="width: 110px"class="btnAddClass" type="info" icon="el-icon-circle-plus" @click="dialogVisible = true">Add Class</el-button>
                                                        <?php include("libraries/resources/teacher/modalAddClass.php"); ?> 
                                                    </div> &nbsp
                                                    <div>
                                                        <el-button size="medium" style="margin-right: 10px; width: 110px" class="btnAddClass" type="info" icon="el-icon-remove" @click="EditdialogVisible = true">Edit Class</el-button>
                                                        <?php include("libraries/resources/teacher/modalEditClass.php"); ?>  
                                                    </div>
                                                </div>
                                                    <div class="d-flex" style="justify-content: flex-end; padding-top: 100px; margin-right: 10px">
                                                        <el-button size="medium" style="width: 110px; padding: 11px" icon="el-icon-document-checked">Quiz</el-button>
                                                        <el-button size="medium" style="width: 110px; padding: 11px" icon="el-icon-tickets" @click="assignDialogVisible = true">Assignment</el-button>
                                                        <?php include("libraries/resources/teacher/assignmentModal.php"); ?>
                                                    </div>  
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 0 5px"> 
                    <template>
                        <el-tabs  class="classtabs" v-model="activeName" @tab-click="handleClick">
                        <el-tab-pane class="tabpane" id="post"name="first"  >
                            <span slot="label"><i class="el-icon-edit-outline" ></i> Post</span>
                                <div class="card" style="height: 15%;" >
                                    <div class="card-body">
                                        <?php include("libraries/resources/teacher/teacherWrite.php"); ?>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <?php include("libraries/resources/teacher/teacherPost.php"); ?>
                                    </div>
                                </div>
                        </el-tab-pane>
                        <el-tab-pane class="tabpane" id="mem" name="second">
                            <span slot="label"> <i class="el-icon-user" ></i> Members</span>
                                <div class="card" style="height: auto; margin-bottom: 30px" >
                                    <div class="card-body">
                                        <?php include("libraries/resources/teacher/teacherMembers.php"); ?>
                                    </div>
                                </div>
                        </el-tab-pane>
                        <el-tab-pane class="tabpane" id="prog" name="third">
                            <span slot="label"> <i class="el-icon-s-data" ></i> Progress</span>
                        </el-tab-pane>
                        </el-tabs>
                    </template>    
                </div>
        </div>
    </div>
<!-- </div> -->
