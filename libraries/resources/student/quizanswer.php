<div class="container pt-5" v-if="tableDataFetchQuiz[0].score >= 0">
    <div class="row">
        <div class="col-md-6">
            <el-card class="box-card">
                <div slot="header" class="clearfix">
                    <span>{{ tableDataFetchQuiz[0].class_name }}</span>
                    <el-label style="float: right; padding: 3px 0" type="text">
                        <el-tag>Score: {{ tableDataFetchQuiz[0].score }}</el-tag>
                    </el-label>
                </div>
                <div class="pt-3">
                    <span>{{ tableDataFetchQuiz[0].firstname }} {{ tableDataFetchQuiz[0].lastname }}</span>
                </div>
                <div class="pt-3">
                    <span>{{ tableDataFetchQuiz[0].title }}</span>
                </div>
                <div class="pt-3">
                    <span>{{ tableDataFetchQuiz[0].submitdate }}</span>
                </div>
                <!-- <div class="pt-3">
                    <span>{{ tableDataFetchQuiz[0].status }}</span>
                </div> -->
            </el-card>
        </div>
    </div>
</div>
<div class="container" v-else>
    <div class="card mt-4" style="width: 100%;" >
        <div class="card-body">
            <h4>Quiz Details</h4>
            <el-divider></el-divider>
            <el-form :label-position="studassignLabelPosition" label-width="100px" :model="quiz" >
                <el-form-item label="Quiz Title">
                    <el-input 
                        v-model="quiz.title"
                        readonly>
                    </el-input>
                </el-form-item>
                <el-form-item label="Instructions">
                    <el-input 
                        type="textarea" 
                        :autosize="{ minRows: 5}"
                        v-model="quiz.instruction"
                        readonly>
                    </el-input>
                </el-form-item>   
                    
                <el-divider></el-divider>   
                <h5>Questions</h5> 
                <el-divider></el-divider>

                <div v-for="(domain, index) in tableDataFetchQuiz">
                    <div v-if="domain.quiz_type == 'True/False' && domain.question != null && domain.points != null">
                        <el-form-item>
                            <el-col :span="2" style="margin-top: 30px">
                                <small style="margin-left: 20px;" >{{index + 1}}.</small>
                            </el-col>
                            <el-col :span="22">
                                <el-input 
                                    style="margin-top: 15px"
                                    placeholder="Question Text"
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="domain.question"
                                    readonly>
                                </el-input>
                                <el-button style="margin: 13px 0; background-color: #EBEEF5" icon="el-icon-paperclip" size="small">Attach Files</el-button>
                                <div>
                                    <span style="font-size: 14px; color: #606266" >Responses</span>
                                    <span style="float: right;font-size: 12px; color: #606266">Correct Answer</span>
                                </div>
                                <div id="TFContainer" style="margin-bottom: 10px">
                                <span id="TFText">True</span>  <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="1">
                                </div>
                                <div id="TFContainer" style="margin-bottom: 10px">
                                <span id="TFText">False</span>  <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="2">
                                </div>
                            </el-col>
                        </el-form-item>
                    </div>
                    <div v-if="domain.quiz_type == 'Multiple Choice' && domain.question != null && domain.points != null">
                        <el-form-item>
                            <el-col :span="2" style="margin-top: 30px">
                                <small style="margin-left: 20px" >{{index + 1}}.</small>
                            </el-col>
                            <el-col :span="22">
                                <el-input 
                                    style="margin-top: 15px"
                                    placeholder="Question Text"
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="domain.question"
                                    readonly>
                                </el-input>
                                <el-button style="margin: 13px 0; background-color: #EBEEF5" icon="el-icon-paperclip" size="small" >Attach Files</el-button>
                                <div>
                                    <span style="font-size: 14px; color: #606266" >Responses</span>
                                    <span style="float: right;font-size: 12px; color: #606266">Correct Answer</span>
                                </div>
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice1"readonly > <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="1">
                                </div>
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice2" readonly> <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="2">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice3" readonly>  <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="3">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice4" readonly> <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="4">
                                </div> 
                                <div id="TFContainer">
                                    <input type="text" id="MCText" placeholder="Enter Answer" v-model="domain.choice5" readonly>  <input id="TFRadio" type="radio"  v-model="domain.studanswer" value="5">
                                </div>  
                            </el-col>
                        </el-form-item>
                    </div>
                    <div v-if="domain.quiz_type == 'Short Answer' && domain.question != null && domain.points != null">
                        <el-form-item>
                            <el-col :span="2" style="margin-top: 30px">
                                <small style="margin-left: 20px" >{{index + 1}}.</small>
                            </el-col>
                            <el-col :span="22">
                                <el-input 
                                    style="margin-top: 15px"
                                    placeholder="Question Text"
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="domain.question"
                                    readonly>
                                </el-input>
                               
                                <label style="margin-top: 10px; color: #606266" >Response</label>
                                <el-input 
                                    style="margin-top: 10px"
                                    placeholder="Type your answer here..."
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="domain.studanswer">
                                </el-input>
                            </el-col>
                        </el-form-item>
                    </div>
                    <div v-if="domain.quiz_type == 'Fill in the Blanks' && domain.question != null && domain.points != null">
                        <el-form-item>
                            <el-col :span="2" style="margin-top: 30px">
                                <small style="margin-left: 20px" >{{index + 1}}.</small>
                            </el-col>
                            <el-col :span="22">
                                <el-input 
                                    style="margin-top: 15px"
                                    placeholder="Question Text"
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="domain.question"
                                    readonly>
                                </el-input>

                                <label style="margin-top: 20px; color: #606266" >Response</label>
                                <el-input 
                                    placeholder="Type your answer here..."
                                    v-model="domain.studanswer">
                                </el-input>
                                <!-- <p style="font-size: 12px; color: #909399">
                                    Use '_' underscores to specify where you would like a blank to appear in the text below
                                </p> -->
                            </el-col>
                        </el-form-item>
                    </div>
                </div>
                    <!-- <el-form :model="dynamicValidateForm" ref="dynamicValidateForm"  class="demo-dynamic">
                        <el-form-item
                            v-for="(domain, index) in objMA"
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
                                    <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="checkbox"  v-model="objMA.choice1" value="1">
                                </div>
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="checkbox"  v-model="objMA.choice2" value="2">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer">  <input id="TFRadio" type="checkbox"  v-model="objMA.choice3" value="3">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="checkbox"  v-model="objMA.choice4" value="4">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer" >  <input id="TFRadio" type="checkbox"  v-model="objMA.choice5" value="5">
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
                    </el-form>      -->
                    <center>
                    <el-button
                    type="primary"
                    @click="studquizscores()"
                    >Submit</el-button>
                    </center>
            </el-form>            
        </div>
    </div>
</div>