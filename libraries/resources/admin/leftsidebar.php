<el-menu
      default-active="2"
      active-text-color="#66b3ff"
      class="el-menu-vertical-demo"
      >
      <a href="homeAdmin" id="homeAdminlink"> 
      <el-menu-item index="1">
      <i class="el-icon-menu" od></i>
        <span>Dashboard</span>
      </el-menu-item>
      </a>
      <el-submenu index="2">
        <template slot="title">
          <i class="el-icon-user-solid"></i>
          <span>Users</span>
        </template>
        <el-menu-item index="2-1" @click="dialogVisible = true" > <i class="el-icon-circle-plus-outline"></i> Add</el-menu-item>
        <a href="userManage" id="usermanagelink"><el-menu-item index="2-2" > <i class="el-icon-s-operation"></i>Manage</el-menu-item></a>
      </el-submenu>
      <el-submenu index="3">
        <template slot="title">
        <i class="el-icon-location"></i>
        <span>Province/Municipality</span>
        </template>
        <el-menu-item index="3-1" @click="provinceDialog = true"> <i class="el-icon-circle-plus-outline" ></i> Add</el-menu-item>
        <a href="addressManage" id="addressTablelink"><el-menu-item index="3-2" ><i class="el-icon-s-operation"></i>Manage</el-menu-item></a>
      </el-submenu>
      <el-menu-item index="4">
        <i class="el-icon-s-promotion"></i>
        <span>Announcements</span>
      </el-menu-item>
    </el-menu>

<?php include("libraries/resources/admin/modalAdd.php"); ?>
<?php include("libraries/resources/admin/addprovinceModal.php"); ?>