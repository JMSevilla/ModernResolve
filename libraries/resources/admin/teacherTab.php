<el-table
    :data="tableDataTeach.filter(data => !search || data.fname.toLowerCase().includes(search.toLowerCase()))"
    style="width: 100%"
    default-sort = "{prop: 'date', order: 'descending'}"
    border>
    <el-table-column
        label="#"
        type="index"
        >
    </el-table-column>
    <el-table-column
      prop="date"
      label="Date"
      width="150"
      sortable>
    </el-table-column>
    <el-table-column
      prop="fname"
      label="Firstname"
      width="120">
    </el-table-column>
    <el-table-column
      prop="lname"
      label="Lastname"
      width="120">
    </el-table-column>
    <el-table-column
        label="Email"
        prop="email"
        width="180">
        </el-table-column>
    <el-table-column
      prop="address"
      label="Address"
      width="300">
    </el-table-column>
    <el-table-column
      fixed="right"
      width="240">
      <template slot="header" slot-scope="scope">
            <el-input
            v-model="search"
            size="medium"
            placeholder="Type to search"/>
        </template>
        <template slot-scope="scope" style="inline">
            <el-button
            size="mini"
            type="warning"
            round>Reset Password</el-button>
            <el-button
            size="mini"
            type="primary" icon="el-icon-edit" circle
            ></el-button>
            <el-button
            size="mini"
            type="danger" icon="el-icon-delete" circle
            ></el-button>
        </template>
    </el-table-column>
  </el-table>
