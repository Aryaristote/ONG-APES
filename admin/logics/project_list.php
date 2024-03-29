<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:26 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
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
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
        require "navbar.php"
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <?php if(isset($_SESSION['delete_success'])): ?>
              <div class="col-md-12 alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $_SESSION['delete_success'] ?>
              </div>
            <?php endif ?>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body row">
                  <div class="span6 col-lg-6">
                    <h4 class="card-title">Liste de Posts</h4>
                  </div>
                  <div class="col-lg-6 text-right">
                  <a href="create_project.php" class="btn btn-primary">Creer un projet</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="">
                <?php foreach($projects as $project): ?>
                  <div class="card">
                  <div class="card-body row">
                      <div class="col-lg-2 image-liste">
                        <img src="<?= $project->files_url ?>" alt="">
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
                          <div class="col-sm-4 text-right">
                            <a href="one_project.php?id=<?= $project->project_id ?>">
                              <label class="badge badge-primary"><i class="fa fa-eye"></i> Ouvrir</label>
                            </a><br>
                            <a href="one_project.php?id=<?= $project->project_id ?>">
                              <label class="badge badge-danger"><i class="fa fa-trash"></i> Supprimer Projet</label>
                            </a><br>
                            <a href="one_project.php?id=<?= $project->project_id ?>">
                              <label class="badge badge-warning"><i class="fa fa-edit"></i> Editer Projet</label>
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div><br>
                <?php endforeach ?>
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
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

<?php
	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
	if($pageWasRefreshed && isset($_SESSION['delete_success'])) {
		unset ($_SESSION['delete_success']);
	} else {
	//do nothing;
	}
?>

<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:26 GMT -->
</html>
