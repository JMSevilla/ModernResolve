<el-dialog
  title="Add Province/Municipality"
  :visible.sync="provinceDialog"
  width="30%">
    <el-form :model="add" :rules="addaddress" ref="add" status-icon label-width="130px" :label-position="provincelabelPosition">
        <el-form-item label="Province" prop="province1">
            <el-input
                v-model="add.province1"
                clearable>
            </el-input>
        </el-form-item>
        <el-form-item label="Municipality" prop="municipality">
            <el-input
                v-model="add.municipality"
                clearable>
            </el-input>
        </el-form-item>
      <center>
      <el-button style="width: 100%; padding: 10px;" type="primary" @click="insertprovinceAdmin('add')">Confirm</el-button>
      </center>    
    </el-form>
</el-dialog>