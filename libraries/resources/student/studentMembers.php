<template>
<el-table
:data="studentTableData.filter(data => !searchStudent || data.fullname.toLowerCase().includes(searchStudent.toLowerCase()) || data.email.toLowerCase().includes(searchStudent.toLowerCase()))"
style="width: 100%">
    <el-table-column
        prop="Avatar"
        width="80">
            <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
    </el-table-column>

    <el-table-column
        prop="fullname"
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
        
        </template>
    
    </el-table-column>
    
</template>