<template>
  <el-tabs v-model="activeMem" @tab-click="handleClick">
    <el-tab-pane label="Student" name="first">
            <template>
            <el-table
            :data="studentTableData.filter(data => !searchStudent || data.name.toLowerCase().includes(searchStudent.toLowerCase()) || data.email.toLowerCase().includes(searchStudent.toLowerCase()))"
            style="width: 100%">
                <el-table-column
                    prop="Avatar"
                    width="80">
                        <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
                </el-table-column>

                <el-table-column
                    prop="name"
                    width="250">
                        <!-- <div style="display:flex">
                            <h6 > John Doe </h6>
                        </div>
                        <div>
                            <small>Johndoe00@gmail.com</small>
                        </div> -->
                </el-table-column>
                <el-table-column
                    prop="email"
                    width="200">
                        <!-- <div style="display:flex">
                            <h6 > John Doe </h6>
                        </div>
                        <div>
                            <small>Johndoe00@gmail.com</small>
                        </div> -->
                </el-table-column>

                <!-- <el-table-column
                    prop="Action">
                        <div style="float:right">
                            <el-button plain>Remove from Class</el-button>
                            <el-button type="warning" plain>Reset Password</el-button>
                        </div>
                </el-table-column> -->
                <el-table-column
                fixed="right"
                width="340">
                <template slot="header" slot-scope="scope">
                    <el-input
                    v-model="searchStudent"
                    size="medium"
                    placeholder="Type to search"/>
                </template>
                <template slot-scope="scope" id="buttonstyle" >
                
                <div style="float:right">
                    <el-button plain
                    @click="deleteStud()">Remove from Class</el-button>
                    <el-button type="warning" 
                    plain 
                    @click="resetStuddialogVisible = true">Reset Password</el-button>
                </div>
                    <!-- </center> -->
                </template>
                
            </el-table-column>
               
            </template>
    </el-tab-pane>

    <el-tab-pane label="Teacher" name="second">
    <template>
            <el-table
            :data="ownerTableData"
            style="width: 100%">
            <el-table-column
                prop="Avatar"
                width="80">
                    <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
                </el-table-column>

                <el-table-column
                    prop="name">
                        <!-- <div class="row" style="display:flex">
                            <h6 > Juan Dela Cruz </h6>
                        </div> -->
                        <!-- <div class="row">
                            <small>Class Owner</small>
                        </div> -->
                </el-table-column>
                <small>Class Owner</small>
            </template>

            <!-- <template>
            <el-table
            :data="teacherTableData"
            style="width: 100%">
                <el-table-column
                    prop="Avatar"
                    width="80">
                        <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>          
                </el-table-column>

                <el-table-column
                    prop="Name"
                    width="550">
                        <h6 > Mary Jane Doe </h6>
                </el-table-column>

                <el-table-column
                    prop="Action">
                        <div style="float:right">
                            <el-button plain>Remove from Class</el-button>
                        </div>
                </el-table-column>
            </template> -->

    </el-tab-pane>
  </el-tabs>
</template>
<?php include("libraries/resources/teacher/resetStudModal.php"); ?>