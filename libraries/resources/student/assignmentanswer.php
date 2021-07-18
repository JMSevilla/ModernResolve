<div class="container">
    <div class="card" style="width: 80%; margin-left: 10%">
        <div class="card-body">
            <h4>Assignment Details</h4>
            <hr>
            <br>
            <form>
                 <div class="mb-4">
                    <label class="mb-2"> Assignment Title </label>
                    <div class="form-outline">
                    <input 
                        v-model="AssignmentStudent_Fetch[0].title"
                        type="text" 
                        class="form-control"
                        id="assignmenttext"
                        readonly/>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="mb-2">Instructions</label>
                    <div class="form-outline">
                        <textarea
                            v-model="AssignmentStudent_Fetch[0].instruction"
                            class="form-control"
                            id="instructiontext"
                            rows="5"
                            readonly
                        ></textarea>
                    </div>
                </div> 
                <div class="mb-4">
                    <label class="mb-2">Download File: 
                        <!-- <embed v-bind:src="'upload/'+AssignmentStudent_Fetch[0].filename" width="300px" height="300px"> -->
                        <a v-bind:href="'upload/'+AssignmentStudent_Fetch[0].filename" download>{{AssignmentStudent_Fetch[0].filename}}</a>
                    </label>
                    <!-- <div class="form-outline">
                        <input 
                            v-model="assignPoints"
                            type="number" 
                            class="form-control"
                            id="points"
                            required/>
                    </div> -->
                </div> 
                
                <div class="mb-5">
                    <input 
                        type="file" 
                        ref="file" 
                        class="form-control" 
                        aria-label="file example"
                        @change="answerassign_selectFILE()"
                         />
                </div>
                <div class="mb-2">
                    <center> 
                        <button class="btn btn-primary" type="button" id="assignSubmitbtn"
                        @click="scoreID_Assignment()">Submit</button>
                    </center>
                </div>
            </form> 
            
        </div>  
        
    </div>
</div>

