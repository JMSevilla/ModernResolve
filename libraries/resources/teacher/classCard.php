<div class="row">
    <div class="col">
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
    <div class="col">
        <div>
            <h4>Class Code</h4>
        </div>
    </div>
    <div class="col">
        <el-button class="btnAddClass" type="info" icon="el-icon-circle-plus" @click="dialogVisible = true">Add Class</el-button>
            <?php include("libraries/resources/teacher/modalAddClass.php"); ?>
    </div>
</div>
