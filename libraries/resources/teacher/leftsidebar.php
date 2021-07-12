 
    <el-aside    >
      <el-menu :default-openeds="['1']" id="teachsidebar">
        <div style="margin: 20px 0 20px 10px">
          <small>
          
           <strong>{{nameclass}} </strong>
          </small>
          <el-button style="margin-top: 10px" type="secondary" icon="el-icon-arrow-left" size="mini" onclick="location.href='teacherdashboard'" round >Back to Class Page</el-button>
        </div>

        <a href="teacherclassdash" id="dashlink">
            <el-menu-item  index="1">
            <template slot="title">&nbsp<i class="fas fa-edit"></i>    Post</template> 
            </el-menu-item > 
        </a>

        <a href="teachermembersdash" id="memberslink">
            <el-menu-item  index="2">
            <template slot="title">&nbsp<i class="fas fa-users"> </i> Members</template>
            </el-menu-item >
        </a>

        <!-- <a href="teacherassignment" id="memberslink">
        <el-menu-item  index="3">
          <template slot="title"><i class="el-icon-tickets"></i>Assignment</template>
        </el-menu-item >
        </a> -->

        <el-submenu index="3">
          <template slot="title">
            <i class="el-icon-tickets"></i>
            <span>Assignment</span>
          </template>
          <a href="teacherassignment" id="memberslink">
            <el-menu-item index="3-1">
            <i class="el-icon-circle-plus-outline"></i> 
            Create Quiz</el-menu-item>
          </a>
          <a href="teacherassignmentdata" id="memberslink">
            <el-menu-item index="3-2" > 
            <i class="el-icon-view"></i> 
            View Submission</el-menu-item>
          </a>
        </el-submenu>

        <el-submenu index="4">
          <template slot="title">
            <i class="el-icon-document-checked"></i>
            <span>Quiz</span>
          </template>
          <a href="teacherQuiz" id="memberslink">
            <el-menu-item index="4-1">
            <i class="el-icon-circle-plus-outline"></i> 
            Create Quiz</el-menu-item>
          </a>
          <a href="teacherquizdata" id="memberslink">
            <el-menu-item index="4-2" > 
            <i class="el-icon-view"></i> 
            View Submission</el-menu-item>
          </a>
        </el-submenu>
        
        <el-menu-item  index="5">
          <template slot="title"><i class="el-icon-s-data"></i>Progress</template>
        </el-menu-item >
      </el-menu>
    </el-aside>    


  <?php include("libraries/resources/teacher/assignmentModal.php"); ?>