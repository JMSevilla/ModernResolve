<el-menu
      default-active="2"
      active-text-color="#66b3ff"
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose"
      :collapse="hideSider">
      <el-menu-item index="1">
        <a href="homeAdmin"> 
        <i class="el-icon-menu"></i>
        <span>Dashboard</span></a>
      </el-menu-item>
      <el-submenu index="2">
        <template slot="title">
          <i class="el-icon-user-solid"></i>
          <span>Users</span>
        </template>
        <el-menu-item index="2-1" @click="dialogVisible = true"> <i class="el-icon-circle-plus-outline"></i> Add</el-menu-item>
        <el-menu-item index="2-2"> <a href="userManage"><i class="el-icon-s-operation"></i>Manage</a></el-menu-item>
      </el-submenu>
      <el-menu-item index="3">
        <i class="el-icon-s-promotion"></i>
        <span>Announcements</span>
      </el-menu-item>
    </el-menu>

<?php include("libraries/resources/admin/modalAdd.php"); ?>
<?php include("libraries/resources/admin/modalManage.php"); ?>