<div class="row" >
    <div class="col-md-1">
            <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
    </div>
    <div class="col-md-11">
            <el-button type="text" id="textbutton"  @click="modalpostdialogVisible = true">Start a discussion, share class materials, etc...</el-button>
            <?php include("libraries/resources/teacher/modalPost.php"); ?>
    </div> 
</div>