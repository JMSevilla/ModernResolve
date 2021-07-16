<div class="container">
    <div class="card" style="width: 80%; margin-left: 10%">
        <div class="card-body">
            <h4>Create Assignment</h4>
            <hr>
            <br>
            <form class="was-validated">
                 <div class="mb-4">
                    <label class="mb-2"> Assignment Title </label>
                    <div class="form-outline">
                    <input 
                        v-model="assignTitle"
                        type="text" 
                        class="form-control is-valid"
                        id="assignmenttext"
                        required/>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="mb-2">Instructions</label>
                    <div class="form-outline">
                        <textarea
                            v-model="assignInstruction"
                            class="form-control is-valid"
                            id="instructiontext"
                            rows="5"
                            required
                        ></textarea>
                    </div>
                </div> 
                <div class="mb-4">
                    <label class="mb-2">Points</label>
                    <div class="form-outline">
                        <input 
                            v-model="assignPoints"
                            type="number" 
                            class="form-control is-valid"
                            id="points"
                            required/>
                    </div>
                </div> 
                <div class="mb-5">
                    <label class="mb-2">Due on</label>
                    <div class="form-outline" >
                        <input 
                            v-model="assignDuedate"
                            style="width:100%" 
                            type="datetime-local" 
                            class="form-control is-valid" 
                            required>
                    </div>
                </div>
                <div class="mb-5">
                    <input 
                        v-model="assignfilename"
                        type="file" 
                        ref="file" 
                        class="form-control" 
                        aria-label="file example" 
                        @change="uploadFile()"
                        required />
                </div>
                <div class="mb-2">
                    <button class="btn btn-primary" type="button" id="assignConfirmbtn" @click="assignmentInsert()">Confirm</button>
                </div>
            </form>    
        </div>
    </div>
</div>


<!-- <video width="400" controls ControlsList="nodownload">
    <source src="upload/1626018585.webm" type="video/webm">
</video>
<embed src="upload/1626015542.docx" width="600px" height="800px"> -->