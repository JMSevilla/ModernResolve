<el-dialog :visible.sync="modalpostdialogVisible" width="40%" v-for="">
  <span slot="title"> 
    <div class="row">
      <div class="col-md-2">
        <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
      </div>
      <div class="col-md-10" style="margin-top:15px;" id="teacherwritepost">
        {{ profile.fname}} {{ profile.lname }}
      </div>
    </div>
  </span>
    <el-input
      placeholder="Type your post here..."
      id="textareapost"
      style="margin-top: -20px;"
      type="textarea"
      v-model="post.description">
    </el-input>

    <div class="mt-3">
      <input 
          type="file" 
          ref="file" 
          class="form-control" 
          aria-label="file example"
          @change="uploadFilePost()"/>
    </div>
  <span slot="footer" class="dialog-footer" style="inline" >  
    <div>
    <el-button type="primary" @click="writePost()" style="width:100%"  size="medium" >Post</el-button>
    </div>
  </span>
  <!-- </div> -->
</el-dialog>