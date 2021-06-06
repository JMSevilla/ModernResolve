<el-dialog
  title="Create Assignments"
  :visible.sync="assignDialogVisible"
  width="50%" 
  :before-close="handleClose"> <hr style="margin-top: -20px">
  <span>
        <el-form :label-position="assignLabelPosition" label-width="100px" :model="assignment">
            <el-form-item label="Assignment Title">
                 <el-input v-model="assignment.title"></el-input>
            </el-form-item>
            <el-form-item label="Instructions">
                <el-input type="textarea" id="assigntextarea" v-model="assignment.instructions"></el-input>
            </el-form-item>        
            <el-form-item label="Due on">
                <el-col :span="11">
                <el-form-item>
                    <el-date-picker type="date" placeholder="Pick a date" v-model="assignment.date" style="width: 100%;"></el-date-picker>
                </el-form-item>
                </el-col>
                <el-col class="line" :span="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-</el-col>
                <el-col :span="11">
                <el-form-item prop="date2">
                    <el-time-picker placeholder="Pick a time" v-model="assignment.time" style="width: 100%;"></el-time-picker>
                </el-form-item>
                </el-col>
            </el-form-item>
            <el-checkbox label="Lock after due date" name="type"></el-checkbox>    
            <br><br>
            <hr>
            <br>
            <span>
                <el-button>Attach Files</el-button> 
                <span style="float: right">
                    <el-button>Cancel</el-button>
                    <el-button type="primary">Confirm</el-button>
                </span>
            </span>
        </el-form>
  </span>
  
</el-dialog>