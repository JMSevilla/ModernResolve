<div id="teacher">
    <?php include("libraries/resources/userNavbar.php"); ?>
    <div class="container">
        <div class="card mt-3" style="width: 70%; margin-left: 15%">
            <div class="card-body">
                <h4>Create Quiz</h4>
                <el-divider></el-divider>
                <el-form :label-position="assignLabelPosition" label-width="100px" :model="quiz" >
                    <el-form-item label="Quiz Title">
                        <el-input 
                            v-model="quiz.title">
                        </el-input>
                    </el-form-item>
                    <el-form-item label="Instructions">
                        <el-input 
                            type="textarea" 
                            :autosize="{ minRows: 5}"
                            v-model="quiz.instructions">
                        </el-input>
                    </el-form-item>   
                     
                    <el-divider></el-divider>   
                    <h5>Questions</h5> 
                    <el-divider></el-divider>

                    <!-- True/False -->
                    <el-row :gutter="12">
                        
                        <el-col :span="2" style="margin-top: 10px">
                            <small style="margin-left: 20px" >1.</small>
                        </el-col>
                        <el-col :span="22">
                            <el-form-item prop="quiztype">
                                <el-select v-model="value" style="width: 50%" >
                                    <el-option
                                    v-for="item in quiztype"
                                    :key="item.value"
                                    :label="item.label"
                                    :value="item.value">
                                    </el-option>
                                </el-select>
                            </el-form-item>
                            <el-form-item >
                                <el-input 
                                    placeholder="Question Text"
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="quiz.textTF">
                                </el-input>
                            </el-form-item>  
                            <el-button style="margin-bottom: 10px; background-color: #EBEEF5" icon="el-icon-paperclip;" size="small" >Attach Files</el-button>
                            <el-form-item>
                                <span style="font-size: 14px; color: #606266">Responses</span>
                                <span style="float: right;font-size: 12px; color: #606266">Correct Answer</span>

                                <div id="TFContainer" style="margin-bottom: 10px">
                                  <span id="TFText">True</span>  <input id="TFRadio" type="radio"  v-model="valueTF" value="1">
                                </div>
                                <div id="TFContainer">
                                  <span id="TFText">False</span>  <input id="TFRadio" type="radio"  v-model="valueTF" value="2">
                                </div>   
                            </el-form-item>
                            <el-form-item label="Grading">
                                <el-input
                                    type="number"
                                    id="grading" 
                                    style="width: 10%"
                                    v-model="quiz.gradingTF">
                                </el-input>
                                <span style="margin-left: 10px">points</span>
                            </el-form-item>
                        </el-col>
                    </el-row>

                    <el-divider></el-divider>
 
                    <!-- multiple choice -->
                    <el-row :gutter="12">
                        <el-col :span="2" style="margin-top: 10px">
                            <small style="margin-left: 40px" >2.</small>
                        </el-col>
                        <el-col :span="22">
                            <el-form-item prop="quiztype">
                            
                                <!-- <el-select v-model="value" style="width: 50%" >
                                    <el-option
                                    v-for="item in quiztype"
                                    :key="item.value"
                                    :label="item.label"
                                    :value="item.value">
                                    </el-option>
                                </el-select> -->
                            </el-form-item>
                            <el-form-item >
                                <el-input 
                                    placeholder="Question Text"
                                    type="textarea" 
                                    :autosize="{ minRows: 3}"
                                    v-model="quiz.textMC">
                                </el-input>
                            </el-form-item>  
                            <el-button style="margin-bottom: 10px; background-color: #EBEEF5" icon="el-icon-paperclip" size="small" >Attach Files</el-button>
                            <el-form-item>
                                <span style="font-size: 14px; color: #606266">Responses</span>
                                <span style="float: right;font-size: 12px; color: #606266">Correct Answer</span>

                                <div id="TFContainer" style="margin-bottom: 10px">
                                  <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="radio"  v-model="valueMC" value="1">
                                </div>
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="radio"  v-model="valueMC" value="2">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer">  <input id="TFRadio" type="radio"  v-model="valueMC" value="3">
                                </div> 
                                <div id="TFContainer" style="margin-bottom: 10px">
                                    <input type="text" id="MCText" placeholder="Enter Answer"> <input id="TFRadio" type="radio"  v-model="valueMC" value="4">
                                </div> 
                                <div id="TFContainer">
                                    <input type="text" id="MCText" placeholder="Enter Answer">  <input id="TFRadio" type="radio"  v-model="valueMC" value="5">
                                </div>  

                            </el-form-item>
                            
                            <el-form-item label="Grading">
                                <el-input 
                                    type="number"
                                    id="grading"
                                    style="width: 10%"
                                    v-model="quiz.gradingMC">
                                </el-input>
                                <span style="margin-left: 10px">points</span>
                            </el-form-item>
                        </el-col>
                    </el-row>
                    <el-divider></el-divider>
                </el-form>  
    
            
            
            </div>
        </div>
    </div>
</div>