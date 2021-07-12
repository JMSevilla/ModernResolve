<div class="container-fluid" style="margin-top: 30px">
  <!-- <div class="row" style="margin-top: 20px" >
    <h3 style="display: flex; align-item: center; justify-content: center">Quiz Data</h3>
  </div> -->

  <el-table
      :data="assignmentdataTableData.filter(data => !search || data.fullname.toLowerCase().includes(search.toLowerCase()))"
      style="width: 100%; margin-top: 10px"
      >
        <el-table-column
            label="Student"
            prop="Avatar"
            width="80">
            <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
        </el-table-column>

        <el-table-column
            prop="fullname"
            width="250">
        </el-table-column>
        <el-table-column
            label="Status"
            prop="status"
            width="200">
        </el-table-column>
        <el-table-column
            label="Time Submitted"
            prop="created"
            sortable
            width="200">
        </el-table-column>
        <el-table-column
        fixed="right"
        width="200">
            <template slot="header" slot-scope="scope">
                <el-input
                v-model="searchQuiz"
                size="medium"
                placeholder="Type to search"/>
            </template>
            <template slot-scope="scope">
            <div style="float:right">
                <el-button 
                    type="primary" 
                   >Grade
                </el-button>
            </div>
            </template>
        </el-table-column>
    </el-table>
  </div>