<div id="app">
    <!-- no node js -->
    <!-- navbar sign up reference : Edmodo -->

    <!-- stepper - jm -->
    <div class="container" style="margin-bottom: 25px; margin-top: 30px;">
    <el-steps :active="active" finish-status="success">
            <el-step title="Step 1" >
            </el-step>
            <el-step title="Step 2"></el-step>
            <el-step title="Step 3"></el-step>
            </el-steps>
       <div class="row" style="margin-top: 30px;">
           <div class="col-md-6">
           <div v-if="active == 0">
           Image Here
            </div>
    
           </div>
           <div class="col-md-6">
           <el-card shadow="always">
               <!-- opening if rendering -->
                <div v-if="active == 0">

                <h4>Personal Information</h4>
            <div class="row">
                <div class="col-md-2">
                    <label class="mt-2">First Name</label>
                </div>
                <div class="col-md-10">
                <el-input
            placeholder="Please input"
            v-model="input"
            id="oninputdata"
            clearable>
            </el-input>
                </div>
            </div>
            <div style="display: inline;">
            <el-button style="margin-top: 12px;" @click="next">Next step</el-button>
            </div>

                </div>
                <div v-else-if="active == 1">
                <h4>Hello world</h4>
                <el-button style="margin-top: 12px;" @click="previous">Previous</el-button>
                <el-button style="margin-top: 12px;" @click="next">Next step</el-button>
                </div>
<!-- closing if rendering -->
            </el-card>
           </div>
       </div>
    </div>
</div>