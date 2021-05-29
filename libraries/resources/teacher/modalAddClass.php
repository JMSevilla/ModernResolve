
<el-dialog
    title="Class Code"
    :visible.sync="dialogVisible"
    width="35%"
    :before-close="handleClose">
    
    <el-input placeholder="Enter Class Code" v-model="input"></el-input>

    <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">Cancel</el-button>
        <el-button type="primary" @click="dialogVisible = false">Confirm</el-button>
    </span>
</el-dialog>