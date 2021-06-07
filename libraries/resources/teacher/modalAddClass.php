
<el-dialog
    title="Create a Class"
    :visible.sync="dialogVisible"
    width="35%">
    <el-form :rules="rulesclassTask"  ref="classTask" :model="classTask">
        <el-form-item prop="classname">
            <el-input placeholder="Enter Class name" v-model="classTask.classname"></el-input>
        </el-form-item>
    </el-form>
    <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">Cancel</el-button>
        <el-button type="primary" @click="onaddclassname('classTask')">Confirm</el-button>
    </span>

</el-dialog>