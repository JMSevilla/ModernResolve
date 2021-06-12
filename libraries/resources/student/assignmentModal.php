<el-dialog
  title="Assignment Form"
  :visible.sync="assignDialogVisible"
  width="40%"> <hr style="margin-top: -20px">
  <span>
    <el-input
    type="textarea"
    :rows="3"
    placeholder="Add your text response"
    v-model="textarea" style="padding-left: 10px; padding-right: 10px">
    </el-input>
            <br> 
            <br>   
            <br>
            <hr>
            <span slot="footer" class="dialog-footer">
                <el-button>Attach Files</el-button> 
                <span style="float: right">
                    <el-button @click="assignDialogVisible = false">Cancel</el-button>
                    <el-button type="primary">Confirm</el-button>
                </span>
            </span>
  </span>
  
</el-dialog>