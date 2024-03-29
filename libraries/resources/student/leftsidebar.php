<el-container >
    <el-aside>
      <el-menu :default-openeds="['1']" id="teachsidebar">
      <div style="margin: 20px 0 20px 10px">
        <div id="classnameborder">
          <div style="margin-left: 10px">
            <small id="sidebarclassname">
              {{studnameclass}}
            </small>
          </div>
        </div>
          <el-button id="editclassbtn" style="margin-top: 20px; width: 90%" plain icon="el-icon-arrow-left" size="mini" onclick="location.href='studentDashboard'">Return to Class Page</el-button>
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

        <a href="studentassignmentdash" id="memberslink">
        <el-menu-item  index="3">
          <template slot="title">&nbsp<i class="fas fa-file"> &nbsp </i>Assignment</template>
        </el-menu-item >
        </a>

        <a href="studentquizdash" id="memberslink">
        <el-menu-item  index="4">
          <template slot="title">&nbsp<i class="fas fa-file-contract">&nbsp&nbsp</i>Quiz</template>
        </el-menu-item >
        </a>
        <el-menu-item  index="5" id="progresslink">
          <template slot="title"><i class="el-icon-s-data"></i>Progress</template>
        </el-menu-item >
      </el-menu>
    </el-aside>    
  </el-container>

