<div id="teacher">
    <?php include("libraries/resources/userNavbar.php"); ?>
    <div class="container">
        <div class="card mt-3 mb-4" style="width: 70%; margin-left: 15%">
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
                    <!-- <el-row :gutter="12">
                         <el-col>
                            <el-form-item prop="quiztype"> -->
                                
                          
                                <!-- <el-button type="info" @click="btnS()" icon="el-icon-circle-plus" style="width: 49%">Add Question</el-button> -->
                            <!-- </el-form-item>
                        </el-col>
                    </el-row> -->
                    <el-select v-model="value" @change="selQue()" style="width: 100%" filterable placeholder="Select type of quiz">
                        <el-option                      
                        v-for="item in quiztype"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                        </el-option>
                    </el-select>
                    <div v-if="indicator == 'True/False'">
                        <?php include("libraries/resources/teacher/TrueOrFalse.php"); ?>
                    </div>
                    <div v-else-if="indicator == 'Multiple Choice'">
                        <?php include("libraries/resources/teacher/MultipleChoice.php"); ?>
                    </div>
                    <div v-else-if="indicator == 'Short Answer'">
                        <?php include("libraries/resources/teacher/ShortAnswer.php"); ?>
                    </div>
                    <div v-else-if="indicator == 'Fill in the blanks'">
                        <?php include("libraries/resources/teacher/FillInTheBlanks.php"); ?>
                    </div>
                    <div v-else-if="indicator == 'Multiple Answer'">
                        <?php include("libraries/resources/teacher/MultipleAnswer.php"); ?>
                    </div>
                    <!-- <div v-else>
                       
                    </div> -->

                </el-form>            
            </div>
        </div>
    </div>
</div>