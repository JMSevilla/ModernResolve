<el-dialog
    title="Join a Class"
    :visible.sync="joinclassdialogVisible"
    width="35%">
    <el-form ref="joinClass" :model="joinclass">
        <el-form-item 
            prop="classcode"  
            :rules="[{ required: true, message: 'Code is required'}]">
            <el-input 
                placeholder="Enter Class code" 
                v-model="joinclass.classcode"
                ></el-input>
        </el-form-item>
    </el-form>
    <span slot="footer" class="dialog-footer">
        <el-button @click="joinclassdialogVisible = false">Cancel</el-button>
        <el-button type="primary" @click="studentjoinclass()">Confirm</el-button>
    </span>

</el-dialog>