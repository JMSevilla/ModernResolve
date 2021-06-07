<el-dialog
  title="Change Password"
  :visible.sync="resetStuddialogVisible"
  width="30%">
     <el-form :model="resetstudent" :rules="rulesresetstudent"  ref="resetstudent" status-icon label-width="130px" :label-position="resetStudlabelPosition"> 
      <el-form-item label="Password" prop="pass">
        <el-input type="password" v-model="resetstudent.pass" autocomplete="off" show-password></el-input>
      </el-form-item>
      <el-form-item label="Confirm Password" prop="checkPass">
        <el-input type="password" v-model="resetstudent.checkPass" autocomplete="off" show-password></el-input>
      </el-form-item>
      <center>
        <el-button style="width: 100%; padding: 10px; margin-top: 15px" type="primary" @click="resetStudent('resetstudent')">Confirm</el-button>
      </center>    
    </el-form>
</el-dialog>