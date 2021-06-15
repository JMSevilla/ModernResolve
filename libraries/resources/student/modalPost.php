<el-dialog :visible.sync="modalpostdialogVisible" width="40%" >
  <span slot="title"> 
    <div class="row">
      <div class="col-md-2">
        <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
      </div>
      <div class="col-md-10" style="margin-top:15px;" id="teacherwritepost">
        {{ profile.fname}} {{ profile.lname }} posted to {{ value }}
      </div>
    </div>
  </span>
    <el-input
      placeholder="Type your post here..."
      id="textareapost"
      style="margin-top: -20px;"
      type="textarea"
      v-model="post.description"
    >
    </el-input>
    
  <span slot="footer" class="dialog-footer" style="inline" >  
    <div>
    <el-button type="primary" @click="writePost()" style="width:100%"  size="medium" >Post</el-button>
    </div>
  </span>
  <!-- </div> -->
</el-dialog>