<div class="container" style="margin-top: 20px;">
        <div class="card mb-4" v-for="(item, index) in studfetch">
                <div class="card-body">
                        <div class="container"  >
                                <div class="row mt-3">
                                        <div class="col-md-1" >
                                                <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
                                        </div>
                                        <div class="col-md">
                                                <div style="display:flex">
                                                        <h6 >{{ item.fullname }} </h6> &nbsp 
                                                        <h6 >posted to</h6> &nbsp
                                                        <h6>{{ item.name }}</h6>
                                                </div>
                                                <div>
                                                        <small>{{ item.created_at }}</small>
                                                </div>
                                                
                                        </div>
                                </div>  
                                <div class="pt-4">     
                                        <p>{{ item.description }}</p>
                                        <div v-if = "studfetch.files != null" style="background-color: #f8f8f8; width: 100%; padding: 30px">
                                        <a href="">click here...</a></div>

                                        <div class="pt-4" >
                                                <el-button-group style="width: 100%; padding: 0px"> 
                                                        <el-button id="buttongroup"><i class="far fa-thumbs-up"></i> Like</el-button>
                                                        <el-button id="buttongroup"> <i class="far fa-comment"></i>  Comment</el-button>
                                                </el-button-group>
                                        </div>
                                        <div class="row pt-4">
                                                <div style="display:flex" >
                                                <el-avatar :size="40"  icon="el-icon-user-solid" id="teacherpost1"></el-avatar>
                                        
                                                <el-input style="margin-left: 15px" placeholder="Write a comment..." v-model="commentInput">
                                                        <el-button slot="append" >Comment</el-button>
                                                </el-input>  
                                                </div>                    
                                        </div>
                                </div>
                        </div>
                </div>
        </div>       
</div>
<br><br>