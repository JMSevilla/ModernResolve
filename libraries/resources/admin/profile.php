<div class="container-fluid">
  <div class="row" style="margin-top: 20px">
    <h3>Admin Profile</h3>
  </div>

  <el-card shadow="always" style="border-radius: 25px; width:60%; margin-left:20%">
      
        <center>
            <i class="el-icon-user-solid" id="adminprofile"></i>
            <!-- <el-upload
                class="avatar-uploader"
                action="https://jsonplaceholder.typicode.com/posts/"
                :show-file-list="false"
                :on-success="handleAvatarSuccess"
                :before-upload="beforeAvatarUpload">
                <img v-if="imageUrl" :src="imageUrl" class="avatar">
                <i v-else class="el-icon-plus avatar-uploader-icon"></i>
            </el-upload>
          
          <div> <el-button type="primary" style="margin-top: 10px" size="mini" round>Change Profile Photo</el-button> </div> -->
          </center>
          <div class="container" style="margin-top: 20px; width: 100%">
            <el-form  :label-position="labelPosition" label-width="24%">
                <el-form-item label="First Name">
                    <el-input v-model="profile.fname"></el-input>
                </el-form-item>
                <el-form-item label="Last Name">
                    <el-input v-model="profile.lname"></el-input>
                </el-form-item>
                <el-form-item label="Birthdate">
                    <el-date-picker
                    
                        v-on:input="cal()"
                        width= "500px"
                        v-model="profile.bdate"
                        format="yyyy-MM-dd"
                        value-format="yyyy-MM-dd"
                        type="date"
                        locale="en"
                        placeholder="Select date and time">
                    </el-date-picker>
                </el-form-item>
                <el-form-item label="Age">
                    <el-input
                        type="number" 
                        v-model="profile.age"
                        id="age"
                        disabled>
                    </el-input>
                </el-form-item>
                <el-form-item label="Gender">
                    <el-radio v-model="profile.sex"  label="female">Female</el-radio>
                    <el-radio v-model="profile.sex"  label="male">Male</el-radio>
                </el-form-item>
                <el-form-item label="Contact Number">
                    <el-input
                        type="number"
                        v-model.number="profile.contact"
                        id="contact"
                        oninput="if(value.length > 12) value=value.slice(0, 12)"
                        clearable>
                    </el-input>
                </el-form-item>
    
            </el-form>
            
            <el-button type="primary" style="width: 100%"  size="medium" round @click="updateAdminProf()">Save Changes</el-button> </div>
            
            <div> 
          </div>
        
       
      </div>
</el>

</div>
  