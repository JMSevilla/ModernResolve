<el-dialog
  title="Change Password"
  :visible.sync="resetadmindialogVisible"
  width="30%">
     <el-form :model="resetadmin" :rules="rulesadmin" ref="resetadmin" status-icon label-width="130px" :label-position="resetlabelPosition">
        <el-form-item label="Old Password" prop="oldpass">
            <el-input type="password" v-model="resetadmin.oldpass" autocomplete="off" show-password></el-input>
        </el-form-item>  
        <el-form-item label="New Password" prop="newpass">
            <el-input type="password" v-model="resetadmin.newpass" autocomplete="off" show-password></el-input>
        </el-form-item>
        <el-form-item label="Confirm Password" prop="checkPass">
            <el-input type="password" v-model="resetadmin.checkPass" autocomplete="off" show-password></el-input>
        </el-form-item>
      <center>
      <el-button style="width: 100%; padding: 10px; margin-top: 15px" type="primary" @click="onConfirmadmin('resetadmin')">Confirm</el-button>
      </center>    
    </el-form>
</el-dialog>