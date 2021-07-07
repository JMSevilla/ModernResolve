
<el-dialog
    title="Edit a Class "
    :visible.sync="EditdialogVisible"

    width="35%">
    
    <el-input  v-model="editclass"></el-input>

    <span slot="footer" class="dialog-footer">
        <el-button @click="EditdialogVisible = false">Cancel</el-button>
        <el-button @click="editclassname()" type="primary" >Confirm</el-button>
    </span>

</el-dialog>