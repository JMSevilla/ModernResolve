<el-menu
      default-active="2"
      active-text-color="#66b3ff"
      class="el-menu-vertical-demo"
      >
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
        <el-menu-item index="2-1" @click="dialogVisible = true" > <i class="el-icon-circle-plus-outline"></i> Add</el-menu-item>
        <a href="userManage" id="usermanagelink"><el-menu-item index="2-2" > <i class="el-icon-s-operation"></i>Manage</el-menu-item></a>
      </el-submenu>
      <el-menu-item index="3">
        <i class="el-icon-s-promotion"></i>
        <span>Announcements</span>
      </el-menu-item>
      <el-submenu index="4">
        <template slot="title">
        <i class="el-icon-location"></i>
        <span>Province/Municipality</span>
        </template>
        <el-menu-item index="4-1" @click="provinceDialog = true"> <i class="el-icon-circle-plus-outline" ></i> Add</el-menu-item>
        <el-menu-item index="4-2" @click="dialogTableVisible = true"> <i class="el-icon-s-operation"></i>Manage</a></el-menu-item>
      </el-submenu>
    </el-menu>

<?php include("libraries/resources/admin/modalAdd.php"); ?>
<?php include("libraries/resources/admin/addprovinceModal.php"); ?>
<?php include("libraries/resources/admin/provinceModal.php"); ?>