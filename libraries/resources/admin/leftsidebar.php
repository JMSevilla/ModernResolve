<el-menu
      default-active="2"
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose">
      <el-menu-item index="1">
        <i class="el-icon-menu"></i>
        <a href="homeAdmin"> <span>Home</span></a>
      </el-menu-item>
      <el-submenu index="2">
        <template slot="title">
          <i class="el-icon-user-solid"></i>
          <span>Users</span>
        </template>
        <el-menu-item index="2-1" @click="dialogVisible = true">Add</el-menu-item>
        <el-menu-item index="2-2"><a href="userManage">Manage</a></el-menu-item>
      </el-submenu>
      <el-menu-item index="3">
        <i class="el-icon-document"></i>
        <span>Class</span>
      </el-menu-item>
      <el-menu-item index="4">
        <i class="el-icon-date"></i>
        <span>Calendar</span>
      </el-menu-item>
    </el-menu>

<?php include("libraries/resources/admin/modalAdd.php"); ?>
<?php include("libraries/resources/admin/modalManage.php"); ?>