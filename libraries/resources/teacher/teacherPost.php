<div>
        <div class="row">
                <div class="col-md-1">
                        <el-avatar :size="55"  icon="el-icon-user-solid" id="teacherpost"></el-avatar>
                </div>
                <div class="col-md">
                        <div style="display:flex">
                                <h6 >Teacher </h6> &nbsp 
                                <h6 >posted to</h6> &nbsp
                                <h6  style="text-decoration: underline">Information Technology</h6>
                        </div>
                        <div>
                                <small>June 03, 2021 21:00</small>
                        </div>
                
                </div>
        </div>  
        <div class="pt-4">     
                <p>TEST PARAGRAPH</p>
                <div style="background-color: #f8f8f8; width: 100%; padding: 30px">
                <a href="">click here...</a></div>

                <div class="pt-4" >
                        <el-button-group style="width: 100%; padding: 0px"> 
                                <el-button  icon="el-icon-thumb" id="buttongroup">Like</el-button>
                                <el-button  icon="el-icon-chat-round" id="buttongroup">  Comment</el-button>
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