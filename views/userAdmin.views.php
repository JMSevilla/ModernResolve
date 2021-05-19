<div class="admin">
    <div id="admin">
        <div class="container" style="margin-bottom: 30px" >
            <div class="row" >
            <el-tabs v-model="activeName" @tab-click="handleClick">
                <el-tab-pane label="Teachers" name="first">Teachers</el-tab-pane>
                <el-tab-pane label="Students" name="second">
                    <?php include("libraries/resources/admin/studTab.php"); ?>
                </el-tab-pane>  
            </el-tabs>
            </div>
        </div>
    </div>
</div>