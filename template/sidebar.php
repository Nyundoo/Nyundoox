<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="./assets/images/nyundoologo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="./assets/images/nyundooicon.png"
            alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="./assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Arthur Nyundo</h5>
                <span>Gold Member</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
              aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#distributors" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-nutrition"></i>
            </span>
            <span class="menu-title">Distributors</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="distributors">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./add_distributor.php">Add</a></li>
              <li class="nav-item"> <a class="nav-link" href="./list_distributor.php">List</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#consumers" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-account"></i>
            </span>
            <span class="menu-title">Consumers</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="consumers">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./add_consumer.php">Add</a></li>
              <li class="nav-item"> <a class="nav-link" href="./list_consumer.php">List</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-pandora"></i>
            </span>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="products">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./add_product.php">Add</a></li>
              <li class="nav-item"> <a class="nav-link" href="./list_product.php">List</a></li>
            </ul>
          </div>
        </li> 
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#purchase" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-pandora"></i>
            </span>
            <span class="menu-title">Purchases</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="purchase">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./add_purchase.php">Add</a></li>
              <li class="nav-item"> <a class="nav-link" href="./list_purchase.php">List</a></li>
            </ul>
          </div>
        </li>        
      </ul>
    </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">