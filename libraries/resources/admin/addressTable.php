<div class="container-fluid">

  <div class="row" style="margin-top: 20px">
    <h3>Province & Municipality Data</h3>
  </div>

  <el-table
    :data="tableDataAddress.filter(data => !search || data.province.toLowerCase().includes(search.toLowerCase()) || data.municipality.toLowerCase().includes(search.toLowerCase()) ) "
    style="width: 100%"
    border>
    <el-table-column
          label="#"
          type="index"
          >
      </el-table-column>
    <el-table-column
      label="Province"
      prop="province">
    </el-table-column>
    <el-table-column
      label="Municipality"
      prop="municipality">
    </el-table-column>
    <el-table-column
      align="center"
      width="200">
      <template slot="header" slot-scope="scope">
        <el-input
          v-model="search"
          size="mini"
          placeholder="Type to search"/>
      </template>
      <template slot-scope="scope">
        <el-popover
            placement="right"
            width="400"
            trigger="click">
            <center> <h5>Edit Here</h5></center>
            <div class="row">
            <div class="col-md-3">
                <label class="mt-3"> Province</label> 
            </div>
            <div class="col-md-9">
                <el-input
                    v-model="modal.province"
                    clearable 
                    style="margin-bottom: 20px; margin-top: 10px">
                </el-input> 
            </div>
            </div>
            <div class="row">
            <div class="col-md-3">    
            <label class="mt-2"> Municipality</label>
            </div>
            <div class="col-md-9">
                <el-input
                    v-model="modal.municipality"
                    clearable>
                </el-input>
            </div>
            </div>
            <center><el-button style="width: 30%; padding: 7px; margin-top: 20px" type="primary">Save</el-button></center>
            <el-button
            size="mini"
            @click="handleEdit(scope.$index, scope.row)"
            type="primary" icon="el-icon-edit" circle
            slot="reference"></el-button>
        </el-popover>
        <el-button
          size="mini"
          @click="ondelete(scope.$index, scope.row)"
          type="danger" icon="el-icon-delete" circle></el-button>
      </template>
    </el-table-column>
  </el-table>

</div>