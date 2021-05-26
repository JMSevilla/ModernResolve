<!-- Just an image -->
<nav class="navbar navbar-light bg-light nav-sticky" style="border-bottom: 1px solid #d9d9d9; padding:0;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="img/toresstec.png" alt="" id="logo" height="50" style="margin-left: 20px">
        <img src="img/torrestechlogo2.png" alt="" id="logo2" height="40">
    </a>
    
    <form class="nav-item me-3 me-lg-0 dropdown" id="navbarRightAlignExample">
              <a       
                style="margin-top: 15px"
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"  
              >
                <i class="fas fa-user"  ></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 140px !important; min-width: 140px; max-width: 140px;">
                <li>
                  <a class="dropdown-item" href="#" data-mdb-toggle="modal"data-mdb-target="#staticBackdrop">Reset Password </a>
                </li>
                <li>
                  <a class="dropdown-item" href="profileAdmin">Profile </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
          </form>
      
  </div>
</nav>
<?php include("libraries/resources/admin/resetadminModal.php"); ?>