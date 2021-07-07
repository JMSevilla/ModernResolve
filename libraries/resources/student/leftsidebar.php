<el-container style="height: 500px;" >
    <el-aside width="190px" id="teachsidebar"  >
      <el-menu :default-openeds="['1']" >
        <div style="margin: 20px 0 20px 10px">
          <small >
           <strong>{{studnameclass}} </strong>
          </small>
          <el-button style="margin-top: 10px" type="secondary" icon="el-icon-arrow-left" size="mini" onclick="location.href='studentDashboard'" round >Back to Class Page</el-button>
        </div>

        <a href="studentclassdash" id="dashlink">
          <el-menu-item  index="1">
          <template slot="title">&nbsp<i class="fas fa-edit"></i>    Post</template> 
          </el-menu-item > 
        </a>
        <a href="studentmemberdash" id="memberslink">
          <el-menu-item  index="2">
          <template slot="title">&nbsp<i class="fas fa-users"> </i> Members</template>
          </el-menu-item >
        </a>

        <el-menu-item  index="3">
          <template slot="title"><i class="el-icon-tickets"></i>Assignment</template>
        </el-menu-item >

        <a href="studentquizdash" id="memberslink">
        <el-menu-item  index="4">
          <template slot="title"><i class="el-icon-document-checked"></i>Quiz</template>
        </el-menu-item >
        </a>
        <el-menu-item  index="5">
          <template slot="title"><i class="el-icon-s-data"></i>Progress</template>
        </el-menu-item >
      </el-menu>
    </el-aside>    
  </el-container>

