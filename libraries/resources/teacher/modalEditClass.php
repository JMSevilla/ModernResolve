
<el-dialog
    title="Edit a Class "
    :visible.sync="EditdialogVisible"

    width="35%">
    
    <el-input  v-model="classTask.editclassname"></el-input>

    <span slot="footer" class="dialog-footer">
        <el-button @click="editclassname()">Cancel</el-button>
        <el-button type="primary" >Confirm</el-button>
    </span>

</el-dialog>