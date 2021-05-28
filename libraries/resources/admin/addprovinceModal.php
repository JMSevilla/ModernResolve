<el-dialog
  title="Add Province/Municipality"
  :visible.sync="provinceDialog"
  width="30%">
    <el-form :model="reset" status-icon label-width="130px" :label-position="provincelabelPosition">
        <el-form-item label="Province">
            <el-select style="width: 100%;" v-model="add.province" filterable placeholder="Select your municipality">
                <el-option
                    v-for="item in options"
                    :key="item.province"
                    :label="item.province"
                    :value="item.province">
                    </el-option>
            </el-select>
        </el-form-item>
        <el-form-item label="Province">
            <el-input
                v-model="add.province1"
                clearable>
            </el-input>
        </el-form-item>
        <el-form-item label="Municipality">
            <el-input
                v-model="add.municipality"
                clearable>
            </el-input>
        </el-form-item>
      <center>
      <el-button style="width: 100%; padding: 10px;" type="primary">Confirm</el-button>
      </center>    
    </el-form>
</el-dialog>