<el-menu class="el-menu-demo" mode="horizontal" id="adminnavbar">
  <el-menu-item >
    <img src="img/toresstec.png" alt="" id="logo" height="50" style="margin-left: 20px">
    <img src="img/torrestechlogo2.png" alt="" id="logo2" height="40">
  </el-menu-item>
  <el-menu-item style="float: right; margin-right: 3%">
    <el-dropdown >
    <span class="el-dropdown-link" id="navbarIcon">
    <i class="fas fa-user"  ></i><i class="el-icon-caret-bottom"></i>
    </span>
    <el-dropdown-menu slot="dropdown">
      <el-dropdown-item @click.native="resetstudentdialogVisible = true" icon="el-icon-key">  Reset Password </el-dropdown-item>
      <a class="profileicon" href="profileStudent"><el-dropdown-item icon="el-icon-user"> Profile </el-dropdown-item></a>
      <el-dropdown-item icon="el-icon-switch-button" @click.native="onlogoutuser">Logout</el-dropdown-item>
    </el-dropdown-menu>
  </el-dropdown>
  <span>Hi, {{ profile.hiName }}!</span>
  </el-menu-item>
</el-menu>
<?php include("libraries/resources/student/resetModal.php"); ?>