<div class="forgotpassword">
        <div class="container" style="margin-bottom: 100px">
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-6">
                    <!-- image column -->
                    <div class="img">
                        <img src="img/forgotpass.png" alt="" width="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- form column -->
                    <div class="card" style="margin-top: 50px">
                        <div class="card-body">
                            <h4 class="card-title">Forgot Password</h5>
                            <div>
                                <label style="font-weight: 500">Email Address:</label>
                            </div>
                            <div class="form-outline" style="margin-top: 20px">
                                <input type="text" id="form1" class="form-control" placeholder="Please input email address" />
                            </div>
        
                            <div>
                                <center>
                                    <div style="margin-bottom: 70px; margin-top: 50px">
                                    <button onclick="location.href='login'" type="button" class="btn btn-primary" style="margin-right: 5px">Cancel</button>
                                    <button href="#" type="button" class="btn btn-primary" data-mdb-toggle="modal"data-mdb-target="#staticBackdrop" style="margin-left: 5px">Send</button>
                                    </div>         
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
</div>

<?php include("libraries/resources/codemodal.php"); ?>