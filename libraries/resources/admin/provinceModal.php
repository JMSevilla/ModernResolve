<el-dialog title="Province & Municipality Data" :visible.sync="dialogTableVisible">
  <el-table :data="gridData"
  border>
    <el-table-column property="date" label="Province" ></el-table-column>
    <el-table-column property="name" label="Municipality" ></el-table-column>
    <el-table-column
      fixed="right"
      label="Operations"
      width="120">
      <template slot-scope="scope">
        <el-button type="primary" icon="el-icon-edit" circle size="mini"></el-button>
        <el-button type="danger" icon="el-icon-delete" circle size="mini"></el-button>
      </template>
    </el-table-column>
  </el-table>
</el-dialog>