<el-dialog
  title="Change Password"
  :visible.sync="resetstudentdialogVisible"
  width="30%">
     <el-form :model="resetstudent" :rules="rulestudent" ref="resetstudent" status-icon label-width="130px" :label-position="resetlabelPosition">
        <el-form-item label="Old Password" prop="oldpass">
            <el-input type="password" v-model="resetstudent.oldpass" autocomplete="off" show-password></el-input>
        </el-form-item>  
        <el-form-item label="New Password" prop="newpass">
            <el-input type="password" v-model="resetstudent.newpass" autocomplete="off" show-password></el-input>
        </el-form-item>
        <el-form-item label="Confirm Password" prop="checkPass">
            <el-input type="password" v-model="resetstudent.checkPass" autocomplete="off" show-password></el-input>
        </el-form-item>
      <center>

      <el-button style="width: 100%; padding: 10px; margin-top: 15px" type="primary" @click="updatepassStudentdash('resetstudent')">Confirm</el-button>

      </center>    
    </el-form>
</el-dialog>