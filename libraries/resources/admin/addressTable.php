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
          prop="provinceID"
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
      <el-dialog
        title="Edit Here"
        :visible.sync="provinceModalAd"
        width="30%">
          <el-form :model="modal" :rules="modaladdress" ref="modal" status-icon label-width="130px" :label-position="provincelabelPosition">
              <el-form-item label="Province" prop="province">
                  <el-input
                      v-model="modal.province"
                      clearable>
                  </el-input>
              </el-form-item>
              <el-form-item label="Municipality" prop="municipality">
                  <el-input
                      v-model="modal.municipality"
                      clearable>
                  </el-input>
              </el-form-item>
            <center>
            <el-button style="width: 100%; padding: 10px;  margin-top: 15px" type="primary" @click="editAddressAdmin('modal')">Save</el-button>
            </center>    
          </el-form>
      </el-dialog>
            <el-button
            size="mini"
            @click="provinceModalAd = true, getaddressbyId(scope.row.provinceID)"
            type="primary" icon="el-icon-edit" circle
            slot="reference"></el-button>
        </el-popover>
        <el-button
          size="mini"
          @click="deleteAddressAdmin(scope.row.provinceID)"
          type="danger" icon="el-icon-delete" circle></el-button>
      </template>
    </el-table-column>
  </el-table>

</div>