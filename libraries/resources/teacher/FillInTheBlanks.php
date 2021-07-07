    <el-row :gutter="12">
    <el-form :model="dynamicValidateForm" ref="dynamicValidateForm"  class="demo-dynamic">
        <el-form-item
            v-for="(domain, index) in objFB"
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

                <label style="margin-top: 20px; color: #606266" >Response</label>
                <el-input 
                    placeholder="Type your answer here..."
                    v-model="domain.answer">
                </el-input>
                <!-- <p style="font-size: 12px; color: #909399">
                    Use '_' underscores to specify where you would like a blank to appear in the text below
                </p> -->
                <div> 
                    <p style="font-size: 14px; color: #606266; margin-top: 20px; margin-bottom:-5px; " >Grading</p>   
                    <el-input 
                        style="width: 10%"
                        type="number"
                        id="grading"
                        v-model="domain.points">
                    </el-input>
                    <span style="margin-left: 10px">points</span>
                </div>
            </el-col>
        </el-form-item>
        <el-form-item>
            <center>
                <el-button 
                    @click="addFillintheBlanks()" 
                    type="secondary" 
                    icon="el-icon-circle-plus">
                    Add Question
                    </el-button>
                        
                <el-button 
                    type="primary" 
                    style="width: 15%;"
                    v-if="value"
                    @click="btnsave()">
                    <i class="far fa-save" style="margin-right: 8px"></i>Save
                </el-button>     
            </center>
        </el-form-item>
        </el-form>
    </el-row>
<!-- </div> -->

