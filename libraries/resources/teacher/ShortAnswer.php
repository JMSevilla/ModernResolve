    <!-- <div v-if="TrueFalse == 'True/False'"> -->
    <el-row :gutter="12">
    <el-form :model="dynamicValidateForm" ref="dynamicValidateForm"  class="demo-dynamic">
        <el-form-item
            v-for="(domain, index) in objSA"
            :key="domain.key"
            :prop="'domains.' + index + '.value'"
        >
            <el-col :span="2" style="margin-top: 30px">
                <small style="margin-left: 20px" >{{index + 1}}</small>
            </el-col>
            <el-col :span="22">
                <el-input 
                    style="margin-top: 15px"
                    placeholder="Question Text"
                    type="textarea" 
                    :autosize="{ minRows: 3}"
                    v-model="domain.question">
                </el-input>
                <div> 
                    <p style="font-size: 14px; color: #606266"  >Grading</p>   
                    <el-input 
                        type="number"
                        id="grading"
                        style="width: 10%"
                        v-model="domain.points">
                    </el-input>
                    <span style="margin-left: 10px">points</span>
                </div>
            </el-col>
        </el-form-item>
        <el-form-item>
            <center>
                <el-button 
                    @click="addShortAnswer()" 
                    style="width: 20%" 
                    type="secondary" 
                    icon="el-icon-circle-plus">
                    Add Question
                    </el-button>
                        
                <el-button 
                    type="primary" 
                    style="width: 20%;"
                    v-if="value"
                    @click="btnsave()">
                    <i class="far fa-save"></i>  
                    Save
                    </el-button>     
            </center>
        </el-form-item>
        </el-form>
    </el-row>
<!-- </div> -->

