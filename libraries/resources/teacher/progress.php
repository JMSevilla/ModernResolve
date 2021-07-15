<div class="container-fluid" style="margin-top: 30px">
    <!-- <div class="card mt-4">
        <div class="card-body "> -->
            <label style="margin-right: 10px">Grading Period:</label>
            <el-select v-model="value" placeholder="Select">
                <el-option
                v-for="item in teachprogress"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>

            <el-table
                :data="progressTableData.filter(data => !search || data.fullname.toLowerCase().includes(search.toLowerCase()))"
                style="width: 100%; margin-top: 50px" border
                >
                <el-table-column
                    label="Students"
                    prop="fullname">
                    
                </el-table-column>
                <el-table-column
                    label="Quiz # 1"
                    prop="quiz1">
                </el-table-column>
                <el-table-column
                    label="Quiz # 2"
                    prop="quiz2">
                </el-table-column>
                <el-table-column
                    label="Assignment # 1"
                    prop="assignment1">
                </el-table-column>
            </el-table>
        <!-- </div>
    </div> -->
</div>
