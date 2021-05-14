<div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Verification Code</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body" style="padding-left: 80px; padding-right: 80px">
        <div class="form-outline" style="margin-top: 20px; margin-bottom: 20px">
            <input type="text" id="form1" class="form-control" placeholder="Enter Code"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button onclick="location.href='resetpass'" type="button" class="btn btn-primary">Verify</button>
      </div>
    </div>
  </div>
</div>

