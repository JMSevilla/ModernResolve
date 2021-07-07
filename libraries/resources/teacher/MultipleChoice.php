<el-row :gutter="12">
<el-form :model="dynamicValidateForm" ref="dynamicValidateForm"  class="demo-dynamic">
    <el-form-item
        v-for="(domain, index) in objMC"
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
            <el-button style="margin: 13px 0; background-color: #EBEEF5" icon="el-icon-paperclip" size="small" >Attach Files</el-button>
            <div>
                <span style="font-size: 14px; color: #606266" >Responses</span>
                <span style="float: right;font-size: 12px; color: #606266">Correct Answer</span>
            </div>
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice1"> <input id="TFRadio" type="radio"  v-model="domain.answer" value="1">
            </div>
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice2"> <input id="TFRadio" type="radio"  v-model="domain.answer" value="2">
            </div> 
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice3">  <input id="TFRadio" type="radio"  v-model="domain.answer" value="3">
            </div> 
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice4"> <input id="TFRadio" type="radio"  v-model="domain.answer" value="4">
            </div> 
            <div id="TFContainer">
                <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice5">  <input id="TFRadio" type="radio"  v-model="domain.answer" value="5">
            </div>  
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
                    @click="addMultipleChoice()" 
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


