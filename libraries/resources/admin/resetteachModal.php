<el-dialog
  title="Change Password"
  :visible.sync="resetteachdialogVisible"
  width="30%">
    <el-form :model="reset" status-icon label-width="130px" :label-position="resetlabelPosition">
      <el-form-item label="Password" prop="pass">
      <el-input type="password" v-model="reset.pass" autocomplete="off" show-password></el-input>
      </el-form-item>
      <el-form-item label="Confirm Password" prop="checkPass">
      <el-input type="password" v-model="reset.checkPass" autocomplete="off" show-password></el-input>
      </el-form-item>
      <center>
      <el-button style="width: 100%; padding: 10px;" type="primary">Confirm</el-button>
      </center>    
    </el-form>
</el-dialog>