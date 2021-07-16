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
                        v-model="assignTitle"
                        type="text" 
                        class="form-control"
                        id="assignmenttext"
                        />
                    </div>
                </div>
                <div class="mb-4">
                    <label class="mb-2">Instructions</label>
                    <div class="form-outline">
                        <textarea
                            v-model="assignInstruction"
                            class="form-control"
                            id="instructiontext"
                            rows="5"
                        ></textarea>
                    </div>
                </div> 
                <div class="mb-4">
                    <label class="mb-2">Download File: <embed src="upload/gg.webm" width="300px" height="300px"></label>
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
                        v-model="assignfilename"
                        type="file" 
                        ref="file" 
                        class="form-control" 
                        aria-label="file example"
                         />
                </div>
                <div class="mb-2">
                    <center> <button class="btn btn-primary" type="button" id="assignSubmitbtn">Submit</button></center>
                </div>
            </form> 
            
        </div>  
        
    </div>
</div>
