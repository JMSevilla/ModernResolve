<el-row :gutter="12">
<el-form :model="dynamicValidateForm" ref="dynamicValidateForm"  class="demo-dynamic">
    <el-form-item
        v-for="(domain, index) in dynamicValidateForm.domains4"
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
                v-model="domain.textMA">
            </el-input>
            <el-button style="margin: 13px 0; background-color: #EBEEF5" icon="el-icon-paperclip" size="small" >Attach Files</el-button>
            <div>
                <small style="font-size: 14px; color: #606266;" >Responses</small>
                <br>
                <span style="font-size: 11px; color: #606266 ;">
                <strong> 1 Point </strong> will be awarded for each correct response that is selected and each incorrect response that isn't
                selected</span>
                <span style="float: right;font-size: 12px; color: #606266">Correct Answer</span>
            </div>
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="checkbox"  v-model="domain.valueMA" value="1">
            </div>
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="checkbox"  v-model="domain.valueMA" value="2">
            </div> 
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer">  <input id="TFRadio" type="checkbox"  v-model="domain.valueMA" value="3">
            </div> 
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="checkbox"  v-model="domain.valueMA" value="4">
            </div> 
            <div id="TFContainer" style="margin-bottom: 10px">
                <input type="text" id="MCText" placeholder="Enter Answer" >  <input id="TFRadio" type="checkbox"  v-model="domain.valueMA" value="5">
            </div>  
            <div> 
                <p style="font-size: 14px; color: #606266"  >Grading</p>   
                <el-input
                    type="number"
                    id="grading" 
                    style="width: 10%"
                    v-model="domain.gradingMA">
                </el-input>
                <span style="margin-left: 10px">points per available response</span>
            </div>
        </el-col>
    </el-form-item>
    <el-form-item>
    <center>
        <el-button @click="addDomain4" style="width: 20%" type="info" icon="el-icon-circle-plus">Add Question</el-button>
    </center>
    </el-form-item>
    </el-form>
</el-row>


