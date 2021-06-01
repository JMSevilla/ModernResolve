
<el-dialog
    title="Add Class"
    :visible.sync="dialogVisible"
    width="30%">
    <el-form :model="addclass" :rules="rulesaddclass" ref="addclass" status-icon label-width="90px" :label-position="resetlabelPosition">
        <el-form-item label="Class Name" prop="addclass">
            <el-input type="classname" v-model="addclass.addclass" autocomplete="off"></el-input>
        </el-form-item>  
      
       <center>
        <el-button style="width: 100%; padding: 10px; margin-top: 15px" type="primary" @click="confirmAddclass('addclass')" >Confirm</el-button>
       </center>
    </el-form>

</el-dialog>