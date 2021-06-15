<!-- <div class="student"> -->
<div id="student">
    <?php include("libraries/resources/studentNavbar.php"); ?>
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card" id="teacherCard" >
                            <div class="card-body">
                                <div class="container">
                                    <div class="row justify-content-center pt-1" style="margin: 0 -60px 0 -50px">
                                        <div class="col-md-4" >
                                            <template>
                                                <el-select id="select" v-model="value" @change="getcodestudent()" placeholder="Select Class Name">
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
                                            <label for="" style="color: gray;">Class Code: {{ studentclasscode }}</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="container">
                                                    <div class="d-flex" style="justify-content: flex-end; padding-top: 130px; margin-right: 10px; padding-bottom: 10px">
                                                        <el-button size="medium" style="width: 110px; padding: 10px; z-index: 1; position:relative" icon="el-icon-document-checked">Quiz</el-button>
                                                        <el-button size="medium" style="width: 120px; padding: 10px; z-index: 1; position:relative" icon="el-icon-tickets" @click="assignDialogVisible = true">Assignment</el-button>
                                                        <?php include("libraries/resources/student/assignmentModal.php"); ?>
                                                    </div>  
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 0 4px"> 
                    <template>
                        <el-tabs  class="classtabs" v-model="activeName" @tab-click="handleClick">
                        <el-tab-pane class="tabpane" id="post"name="first"  >
                            <span slot="label"><i class="fas fa-edit"></i> Post</span>
                                <div class="card" id="teacherCard" v-if="value">
                                    <div class="card-body">
                                        <?php include("libraries/resources/student/studentWrite.php") ?>
                                    </div>
                                </div>
                                <div class="card" id="teacherCard" v-for="(item, index) in fetch">
                                    <div class="card-body">
                                    <?php include("libraries/resources/student/studentPost.php"); ?>

                                    </div>
                                </div>
                        </el-tab-pane>
                        <el-tab-pane class="tabpane" id="mem" name="second">
                            <span slot="label"> <i class="fas fa-users"></i> Members</span>
                                <div class="card" style="height: auto; margin-bottom: 30px" id="teacherCard" v-if="value">
                                    <div class="card-body">
                                        <?php include("libraries/resources/student/studentMembers.php"); ?>
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
