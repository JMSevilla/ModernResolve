<!-- <div class="container" style="margin-bottom: 30px" > -->
<div class="row" >
            <el-tabs v-model="activeName" @tab-click="handleClick" >
                <el-tab-pane name="first">
                    <span slot="label"><i class="el-icon-s-custom" ></i> Teachers</span>
                    
                      <el-table
                          :data="tableDataTeach.filter(data => !search || data.fname.toLowerCase().includes(search.toLowerCase()))"
                          :default-sort = "{prop: 'date', order: 'descending'}"
                          style="width: 100%"
                          >
                          <el-table-column
                          label="#"
                          type="index"
                          >
                          </el-table-column>
                          <el-table-column
                          label="Date"
                          prop="date"
                          width="110"
                          sortable>
                          </el-table-column>
                          <el-table-column
                          label="First Name"
                          prop="fname"
                          width="150"
                          >
                          </el-table-column>
                          <el-table-column
                          label="Last Name"
                          prop="Lname"
                          width="150">
                          </el-table-column>
                          <el-table-column
                          label="Email"
                          prop="email">
                          </el-table-column>
                          <el-table-column
                          label="Contact No."
                          prop="cnumber"
                          width="120">
                          </el-table-column>
                          <el-table-column
                          align="center">
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
                              @click="handleDelete(scope.$index, scope.row)" round>Reset Password</el-button>
                              <el-button
                              size="mini"
                              type="primary" icon="el-icon-edit" circle
                              @click="handleEdit(scope.$index, scope.row)"></el-button>
                              <el-button
                              size="mini"
                              type="danger" icon="el-icon-delete" circle
                              @click="handleDelete(scope.$index, scope.row)"></el-button>
                          </template>
                          </el-table-column>
                      </el-table>
                    
                </el-tab-pane>
                
                <el-tab-pane name="second">
                    <span slot="label"><i class="el-icon-user-solid" ></i> Students</span>
                   
                </el-tab-pane>  
            </el-tabs>
            </div>
        <!-- </div> -->