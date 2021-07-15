<div class="container-fluid" style="margin-top: 30px">
  <!-- <div class="row" style="margin-top: 20px" >
    <h3 style="display: flex; align-item: center; justify-content: center">Quiz Data</h3>
  </div> -->

  <el-table
      :data="tableDataAssignment.filter(data => !search || data.title.toLowerCase().includes(search.toLowerCase()))"
      style="width: 100%; margin-top: 10px"
      border>
      <el-table-column
          prop="userID"
          label="#"
          type="index"
          >
      </el-table-column>
      <el-table-column
        prop="title"
        label="Assignment Title">
      </el-table-column>
      <el-table-column
        prop="created"
        label="Date"
        sortable
        width="200">
      </el-table-column>
      <el-table-column
        align="right"
        width="300">
        <template slot="header" slot-scope="scope">
              <el-input
              v-model="search"
              size="medium"
              placeholder="Type to search"/>
          </template>
          <template slot-scope="scope">
    
          <div>
            <el-button
              size="mini"
              type="primary"
            >Take an Assignment</el-button>
          </div>
            <!-- <el-button v-if="scope.row.islock != 'open'"
              size="mini"
              type="danger"
            >Locked</el-button>
            <el-button v-else-if="scope.row.islock == 'open'"
              size="mini"
              type="primary"
              @click="studquizanswer(scope.row.titleID)"
              onclick="location.href='studentquizanswerdash'"
            >View</el-button> -->
         
      </template>
      </el-table-column>
    </el-table>
  </div>