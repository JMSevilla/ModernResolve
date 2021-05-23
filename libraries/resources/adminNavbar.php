<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-sticky" style="border-bottom: 1px solid #d9d9d9" id="navbarAdminHead">
  <!-- Container wrapper -->
  
  <div class="container-fluid" id="forpadding">
    <!-- Toggle button -->
    
      <!-- <div class="col-md-8"> -->
        <!-- <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button> -->

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" id="navbarAdminImages">
            <img src="img/toresstec.png" alt="" id="logo">
            <img src="img/torrestechlogo2.png" alt="" id="logo2">
          </a>
          <!-- Left links -->
          <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarAdminmenu">
            <li class="nav-item <?php echo(basename($_SERVER['PHP_SELF']) =="homeAdmin.php")?"active":""; ?>" style="margin-right: 15px">
              <a class="nav-link" href="homeAdmin">Home</a>
            </li>
            <li class="nav-item <?php echo(basename($_SERVER['PHP_SELF']) =="userAdmin.php")?"active":""; ?>" style="margin-right: 15px">
              <a class="nav-link" href="userAdmin">Users</a>
            </li>
            <li class="nav-item" style="margin-right: 15px">
              <a class="nav-link" href="#">Class</a>
            </li>
            <li class="nav-item" style="margin-right: 15px">
              <a class="nav-link" href="#">Calendar</a>
            </li>
          </ul> -->
          <!-- Left links -->
        </div>
      <!-- </div> -->
  
    
    <!-- Collapsible wrapper -->
      <!-- <div class="col-md-4"> -->
    <!-- Right elements -->
        <div class="d-flex align-items-center" id="navbarSide">
          <!-- Icon -->
          <div class="searchbar" >
            <input type="search" id="txtsearch" class="searchbar1"placeholder="Search"
            aria-label="Search" />
          </div>
          <a class="text-reset me-3" href="#">
            <i id="notification"class="fas fa-bell"></i>
          </a>
          <a class="text-reset me-3" href="#">
            <i id="message" class="fas fa-envelope"></i>
          </a>
          <!-- Avatar -->
          <form class="nav-item me-3 me-lg-0 dropdown">
              <a       
                style="margin-top: 15px"
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-user"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">My Profile </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
          </form>
        </div>
      <!-- </div> -->
    <!-- Right elements -->
    
  </div>
  <!-- Container wrapper -->
 
</nav>
<!-- Navbar -->

