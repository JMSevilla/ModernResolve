<div class="container-fluid">
  <div class="row" style="margin-top: 20px">
    <h3>Student Profile</h3>
  </div>

  <el-card shadow="always" style="border-radius: 25px; width:50%; margin-left:25%; margin-bottom: 70px">
      
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
            <el-form  :label-position="labelPosition" label-width="22%">
                <el-form-item label="First Name">
                    <el-input v-model="profile.fname"></el-input>
                </el-form-item>
                <el-form-item label="Last Name">
                    <el-input v-model="profile.lname"></el-input>
                </el-form-item>
                <el-form-item label="Birthdate">
                    <el-date-picker
                        v-on:input="calagestudentdash()"
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
                <el-form-item label="Contact Number" stle="margin-bottom: 20px">
                    <el-input
                        type="number"
                        v-model.number="profile.contact"
                        id="contact"
                        oninput="if(value.length > 12) value=value.slice(0, 12)"
                        clearable>
                    </el-input>
                </el-form-item>

                <el-form-item label="Address">
                    <!-- <el-select style="width: 100%; margin-bottom: 10px" @change="onprovince" v-model="profile.province" filterable placeholder="Select province">
                        <el-option
                            v-for="item in provinceGetterss"
                            :key="item.province"
                            :label="item.province"
                            :value="item.province">
                        </el-option>
                    </el-select>

                    <el-select style="width: 100%; margin-bottom: 10px" v-model="profile.municipality" filterable placeholder="Select your municipality">
                        <el-option
                            v-for="item in options"
                            :key="item.municipality"
                            :label="item.municipality"
                            :value="item.municipality">
                        </el-option>
                    </el-select> -->
                    <el-input
                        style="margin-bottom: 10px"
                        placeholder="Province"
                        v-model="profile.province"
                        clearable>
                    </el-input>

                    <el-input
                        style="margin-bottom: 10px"
                        placeholder="Municipality"
                        v-model="profile.municipality"
                        clearable>
                    </el-input>

                    <el-input
                        style="margin-bottom: 10px"
                        placeholder="House no. Street Name"
                        v-model="profile.street"
                        clearable>
                    </el-input>
                </el-form-item>
            </el-form>
            <center>
            <el-button round onclick="location.href='studentDashboard'" style="width: 25%">Cancel</el-button>
            <el-button type="primary"  style="width: 25%" round @click="updateprofStudentdash()">Save Changes</el-button> </div>

            </center>
            
            <div> 
          </div>
        
       
      </div>
</el>

</div>
  