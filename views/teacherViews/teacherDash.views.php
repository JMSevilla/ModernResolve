<div class="teacher">
    <div id="teacher">
        <div class="container-fluid" style="margin-top: -2px; margin-bottom: 30px">
            <?php include("libraries/resources/userNavbar.php"); ?>
                <div class="row" >  
                    <div class="card">
                        <div class="card-body" id="rowcard1">
                            <div class="row">
                                <div class="col" id="col1">
                                    <el-dropdown class="dropdownmenu">
                                        <span class="el-dropdown-link">
                                            Select Class<i class="el-icon-arrow-down el-icon--right"></i>
                                        </span>
                                            <el-dropdown-menu slot="dropdown" class="dropdownmenu">
                                            <el-dropdown-item>Action 1</el-dropdown-item>
                                            <el-dropdown-item>Action 2</el-dropdown-item>
                                            </el-dropdown-menu>
                                    </el-dropdown>
                                </div>

                                <div class="col" id="col2">
                                    <div style="margin-top: 35px; font-size:1em">
                                        <label for="" style="color: gray;">Class Code:</label>
                                        <span style="margin-right: 10px">test</span>
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
                                        <?php include("libraries/resources/teacher/modalAddClass.php"); ?>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="row" style="margin-top: -30px">
                    <div class="card" id="card2">
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
