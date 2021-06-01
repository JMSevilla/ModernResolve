<div class="container-fluid">
  <div class="row" style="margin-top: 20px">
    <h3>Teachers Data</h3>
  </div>

  <el-table
      :data="tableDataTeach.filter(data => !search || data.firstname.toLowerCase().includes(search.toLowerCase()) || data.lastname.toLowerCase().includes(search.toLowerCase()))"
      style="width: 100%; margin-top: 10px"
      border>
      <el-table-column
          prop="userID"
          label="#"
          type="index"
          >
      </el-table-column>
      <el-table-column
        prop="firstname"
        label="Firstname">
      </el-table-column>
      <el-table-column
        prop="lastname"
        label="Lastname">
      </el-table-column>
      <el-table-column
          label="Email Address"
          prop="email_address">
          </el-table-column>
      <el-table-column
        prop="created_at"
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
          <template slot-scope="scope" style="display: inline;" >
          <center>
          <!-- <el-button-group size="mini"> 
            <el-button v-on:click="" type="primary" size="mini" >Deactivate</el-button>
            <el-button size="mini">Activate</el-button>
          </el-button-group> -->
          <div v-if="scope.row.is_activate == 1">
            <el-button @click="ondeactivate(scope.row.userID)" type="danger" plain>Deactivate</el-button>
          </div>
          <div v-else>
          <el-button @click="onactivate(scope.row.userID)" type="success" plain>Activate</el-button>
          </div>
              <el-button
              style="margin-left:10px"
              size="mini"
              type="warning"
              @click="resetteachdialogVisible = true, btnResetPass(scope.row.userID)"
              round>Reset Password</el-button>
              <el-button 
              size="mini"  
              type="danger" 
              @click="delConfirm(scope.row.userID)"
              round>Delete</el-button>
          </template>
          </center>
      </el-table-column>
    </el-table>
  </div>

  <?php include("libraries/resources/admin/resetteachModal.php"); ?>