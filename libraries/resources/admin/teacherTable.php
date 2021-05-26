<div class="container-fluid">
  <div class="row" style="margin-top: 20px">
    <h3>Teachers Data</h3>
  </div>

  <el-table
      :data="tableDataTeach.filter(data => !search || data.fname.toLowerCase().includes(search.toLowerCase()))"
      style="width: 100%; margin-top: 10px"
      default-sort = "{prop: 'date', order: 'descending'}"
      border>
      <el-table-column
          label="#"
          type="index"
          >
      </el-table-column>
      <el-table-column
        prop="fname"
        label="Firstname">
      </el-table-column>
      <el-table-column
        prop="lname"
        label="Lastname">
      </el-table-column>
      <el-table-column
          label="Email"
          prop="email">
          </el-table-column>
      <el-table-column
        prop="date"
        label="Date"
        sortable
        width="110">
      </el-table-column>
      <el-table-column
        fixed="right"
        width="400">
        <template slot="header" slot-scope="scope">
              <el-input
              v-model="search"
              size="medium"
              placeholder="Type to search"/>
          </template>
          <template slot-scope="scope" style="inline" >
          <center>
              <el-radio-group v-model="radio1" size="mini">
                  <el-radio-button label="Deactivate"></el-radio-button>
                  <el-radio-button label="Activate"></el-radio-button>
                </el-radio-group>
              <el-button
              size="mini"
              type="warning"
              @click="resetteachdialogVisible = true"
              round>Reset Password</el-button>
              <el-button 
              size="mini"  
              type="danger" 
              round>Delete</el-button>
          </template>
          </center>
      </el-table-column>
    </el-table>
  </div>

  <?php include("libraries/resources/admin/resetteachModal.php"); ?>