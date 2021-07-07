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
                            class="form-control is-valid"
                            id="instructiontext"
                            rows="5"
                            required
                        ></textarea>
                    </div>
                </div>
                <div class="mb-5">
                    <label class="mb-2">Due on</label>
                    <div class="form-outline" >
                        <input style="width:100%" type="datetime-local" class="form-control is-valid" required>
                    </div>
                </div>
                <div class="mb-5">
                    <input type="file" class="form-control" aria-label="file example" required />
                </div>
                <div class="mb-2">
                    <button class="btn btn-primary" type="button" id="assignConfirmbtn">Confirm</button>
                </div>
            </form>
        </div>  
    </div>
</div>