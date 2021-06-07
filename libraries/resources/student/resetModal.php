<el-dialog
  title="Change Password"
  :visible.sync="resetstudentdialogVisible"
  width="30%">
     <el-form :model="resetstudent" status-icon label-width="130px" :label-position="resetlabelPosition">
        <el-form-item label="Old Password" prop="oldpass">
            <el-input type="password" v-model="resetstudent.oldpass" autocomplete="off" show-password></el-input>
        </el-form-item>  
        <el-form-item label="New Password">
            <el-input type="password" v-model="resetstudent.newpass" autocomplete="off" show-password></el-input>
        </el-form-item>
        <el-form-item label="Confirm Password">
            <el-input type="password" v-model="resetstudent.checkPass" autocomplete="off" show-password></el-input>
        </el-form-item>
      <center>

      <el-button style="width: 100%; padding: 10px; margin-top: 15px" type="primary">Confirm</el-button>

      </center>    
    </el-form>
</el-dialog>