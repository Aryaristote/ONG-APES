<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:23 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stage Liste</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div class="card">
              <p class="card-title" style="padding: 20px 0 0 10px">Offres d'emplois</p>
            </div><br>
            <div class="col-md-12 grid-margin">
              <?php if(isset($_SESSION['delete_offre'])): ?>
                <div class="col-md-12 alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <?= $_SESSION['delete_offre'] ?>
                </div>
              <?php endif ?>

              <div class="row">
                <?php foreach($offres as $offre): ?>
                  <div class="col-md-4" style="margin-bottom: 20px">
                    <a href="one_offre.php?id=<?= $offre->offre_id ?>" class="card-link">
                    <div class="card">
                    <img class="card-img-top" src="../../jobs/jobs-backimage.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title own-cardTitle"><?= substr($offre->post_name, 0, 150)."..." ?></h5>
                      <p class="card-text own-carDescr"><?= substr($offre->post_description, 0, 100)."..." ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Zone: </b><?= $offre->post_zone ?></li>
                      <li class="list-group-item"><b>Type: </b><?= $offre->post_contract ?></li>
                      <li class="list-group-item"><b>Date de creation: </b><?= $offre->created_at ?></li>
                    </ul>
                    </div>
                    </a>
                  </div>
                <?php endforeach; ?>
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
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <!-- <script>
    $.fn.dataTable.ext.errMode = 'throw';
  </script> -->
</body>

<?php
	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
	if($pageWasRefreshed && isset($_SESSION['delete_offre'])) {
		unset ($_SESSION['delete_offre']);
	} else {
	//do nothing;
	}
?>


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:23 GMT -->
</html>

