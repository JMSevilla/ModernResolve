<el-dialog
  title="Create Assignments"
  :visible.sync="assignDialogVisible"
  width="50%"> <hr style="margin-top: -20px">
  <span>
        <el-form :label-position="assignLabelPosition" label-width="100px" :model="assignment" :rules="rulesAssignment" ref="assignment">
            <el-form-item label="Assignment Title" prop="title">
                 <el-input 
                    v-model="assignment.title">
                 </el-input>
            </el-form-item>
            <el-form-item label="Instructions" prop="instructions">
                <el-input 
                    type="textarea" 
                    id="assigntextarea" 
                    v-model="assignment.instructions">
                </el-input>
            </el-form-item>        
            <el-form-item label="Due on" required>
                <el-col :span="11">
                <el-form-item prop="date">
                    <el-date-picker 
                        type="date" 
                        placeholder="Pick a date" 
                        v-model="assignment.date" 
                        style="width: 100%;">
                    </el-date-picker>
                </el-form-item>
                </el-col>
                <el-col class="line" :span="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-</el-col>
                <el-col :span="11">
                <el-form-item  prop="time">
                    <el-time-picker 
                        placeholder="Pick a time" 
                        v-model="assignment.time" 
                        style="width: 100%;">
                    </el-time-picker>
                </el-form-item>
                </el-col>
            </el-form-item>
            <el-form-item prop="type" style="margin-top: 30px"  >
                <el-checkbox label="Lock after due date" name="type" v-model="assignment.type"></el-checkbox>    
            </el-form-item>
            <br>
            <hr>
            <!-- <br> -->
            <span>
                <el-button>Attach Files</el-button> 
                <span style="float: right">
                    <el-button @click="assignDialogVisible = false">Cancel</el-button>
                    <el-button type="primary" @click="assignConfirm('assignment')">Confirm</el-button>
                </span>
            </span>
        </el-form>
  </span>
  
</el-dialog>