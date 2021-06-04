
<el-dialog
    title="Create a Class"
    :visible.sync="dialogVisible"

    width="35%">
    
    <el-input placeholder="Enter Class name" v-model="classTask.classname"></el-input>

    <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">Cancel</el-button>
        <el-button type="primary" @click="onaddclassname()">Confirm</el-button>
    </span>

</el-dialog>