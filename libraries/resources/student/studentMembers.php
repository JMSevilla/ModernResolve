<template>
    <div class="container">
        <el-tabs v-model="activeMem" @tab-click="handleClick"  >
            <el-tab-pane label="Student" name="first">
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
                            width="300">
                        </el-table-column>
                        <el-table-column
                            prop="email"
                            width="200">
                        </el-table-column>

                        <el-table-column
                        fixed="right"
                        width="340">
                        <template slot="header" slot-scope="scope">
                            <el-input
                            v-model="searchStudent"
                            size="medium"
                            placeholder="Type to search"/>
                        </template>               
                    </el-table-column>
                    
                    </template>
            </el-tab-pane>

            <el-tab-pane label="Teacher" name="second">
            <template>
                    <el-table
                    :data="teacherTableData"
                    style="width: 100%">
                    <el-table-column
                        prop="Avatar"
                        width="80">
                            <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
                        </el-table-column>

                        <el-table-column
                            prop="fullname">
                        </el-table-column>
                    </template>
            </el-tab-pane>
        </el-tabs>
    </div>
</template>