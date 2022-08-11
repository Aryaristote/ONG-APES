<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:26 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Liste de projets</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" type="image/png" href="../wp-content/favIcons/android-icon-36x361.png">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="../wp-content/uploads/revslider/slider-2/apeslogo.png" style="width: 100px" alt="logo"></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../wp-content/uploads/revslider/slider-2/apeslogo.png" style="width: 100px" alt="logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <?php if($_SESSION['role'] == "full"): ?>
              <li class="nav-item dropdown">
                <a class="add btn btn-primary" href="register.php">
                <i class="icon-head menu-icon"></i>
                  Nouvel Admin
                </a>
              </li>
            <?php endif ?>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face28.jpg" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a href="logout.php" class="dropdown-item">
                    <i class="ti-power-off text-primary"></i>
                    Logout
                  </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post_list.php">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Actualités</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="project_list.php">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Projets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stage_show.php">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Offres</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create_post.php">
              <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Creer Actualité</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create_project.php">
              <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Creer un projets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create_offre.php">
              <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Creer une Offre</span>
              </a>
            </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="text-right">
                <a href="project_list.php" class="btn btn-primary">Tous les projets</a>
              </div>
            </div>
          </div>

          <div class="grid-margin stretch-card">
              <?php if (isset($error)) : ?>
                <div class="alert alert-danger">
                  <?= $error ?>
                </div>
              <?php endif ?>
              <?php if (isset($success)) : ?>
                <div class="alert alert-success">
                  <?= 
                    $_SESSION['delete_success'] = $success;
                  ?>
                </div>
              <?php endif ?>
              <div class="col-lg-12 card">
                <div class="card-body row">
                    <div class="col-lg-2 image-liste">
                      <img src="<?= $project->files_url ?>" alt="" style="max-height: 200px">
                    </div>
                    <div class="col-lg-10">
                      <div class="row">
                        <div class="col-sm-10">
                          <h6><?= $project->project_name ?></h6>
                          <p><?= $project->project_content ?></p>
                          <small>
                            Creer le: <b><?= $project->created_at ?><b> | 
                            Status: <b><?= $project->project_status ?><b>
                          </small>
                        </div>
                        <form method="post" class="col-sm-4 text-right">
                          <input type="submit" name="delete" class="own-badge badge-danger" value="Supprimer Projet" /><br>
                          <input type="submit" name="update" class="own-badge badge-warning" value="Edite Projet" />
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright APES / RD Congo 2022 ©. All rights reserved.</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:26 GMT -->
</html>
