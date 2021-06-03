<div class="teacher">
    <div id="teacher">
    <?php include("libraries/resources/userNavbar.php"); ?>
        <div class="container">
            
                <div class="row" >  
                    <div class="card">
                        <div class="card-body" id="rowcard1">
                            <div class="row">
                                <div class="col" id="col1">
                                    <div style="margin-top: 10px">
                                        <template id="selectclass">
                                            <el-select v-model="value" @change="getcodeteacher()" clearable placeholder="Select Class Name" id="select">
                                                <el-option
                                                v-for="item in options"
                                                :key="item.name"
                                                :label="item.name"
                                                :value="item.name">
                                                </el-option>
                                            </el-select>
                                        </template>
                                    </div>
                                </div>

                                <div class="col" id="col2">
                                    <div style="margin-top: 35px; font-size:1em; margin-left: 20px">
                                        <label for="" style="color: gray;">Class Code:</label>
                                        <span style="margin-right: 10px">{{ teacherclasscode }}</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0" checked>
                                            <label class="onoffswitch-label" for="myonoffswitch">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <el-button class="btnAddClass" type="info" icon="el-icon-circle-plus" @click="dialogVisible = true">Add Class</el-button>
                                        <?php include("libraries/resources/teacher/modalAddClass.php"); ?>    
                                    <div style="display: inline; position: absolute; bottom: 10px; margin-left: 100px">
                                        <el-button>Quiz</el-button>
                                        <el-button>Assignment</el-button>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="card" id="rowcard2">
                        <div class="card-body">
                            <template>
                                <el-tabs  class="classtabs" v-model="activeName" @tab-click="handleClick">
                                <el-tab-pane class="tabpane" id="post" label="Posts" name="first">
                                    <div style="margin-top: 30px">
                                    <?php include("libraries/resources/teacher/teacherPost.php"); ?>
                                    </div>
                                </el-tab-pane>

                                <el-tab-pane class="tabpane" id="mem" label="Members" name="second"></el-tab-pane>
                                <el-tab-pane class="tabpane" id="prog" label="Progress" name="third"></el-tab-pane>
                                </el-tabs>
                            </template>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
