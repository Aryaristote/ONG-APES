<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:23 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Creer un post</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
      <!-- partial:partials/_sidebar.html -->
      <?php
        require "navbar.php"
      ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <?php if($_SESSION['role'] == "full"): ?>
                  <div class="card-body">
                    <h4 class="card-title">Créer Offre</h4>
                    <?php if (isset($error)) : ?>
                      <div class="alert alert-danger">
                        <?= $error ?>
                      </div>
                    <?php endif ?>
                    <?php if (isset($success)) : ?>
                      <div class="alert alert-success">
                        <?= $success ?>
                      </div>
                    <?php endif ?>
                    <form method="POST" class="forms-sample" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Titre de l'offre</label>
                        <input name="post_name" type="text" required="required" class="form-control" placeholder="Titre">
                      </div>
                      <div class="col-md-12 row">
                        <div class="col-md-6 form-group">
                          <label for="exampleTextarea1">Description du poste</label>
                          <textarea name="post_description" required="required" class="form-control" rows="10" placeholder="Ce que le candidat est censé faire"></textarea>
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Exigence pour le poste</label>
                          <textarea name="post_exigence" required="required" class="form-control" rows="10" placeholder="Qualités que le candidat devrait avoir"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 row">
                        <div class="col-md-3">
                          <label>Nombre de candidats</label>
                          <input type="number" name="post_number" min="1" max="10" required="required" placeholder="1" class="form-control file-upload-info"/>
                        </div>
                        <div class="col-md-3 form-group">
                          <label for="exampleTextarea1">Zone d'affectation</label>
                          <textarea name="post_zone" required="required" class="form-control" rows="1" placeholder="Kavumu, Bukavu"></textarea>
                        </div>
                        <div class="col-md-3 form-group">
                          <label for="exampleTextarea1">Date d'entré en service</label>
                          <input type="date" name="start_date" class="form-control" placeholder="18-07-2022" max="2024-12-30">
                        </div>
                        <div class="col-md-3 form-group">
                          <label for="exampleTextarea1">Type de contrat</label>
                          <select class="form-control" name="post_contract">
                            <option value="">Type de contrat</option>
                            <option value="Stage">Stage</option>
                            <option value="Enquete">Enqueteur</option>
                            <option value="Contrat">Contrat</option>
                          </select>
                        </div>
                      </di>
                      <button class="mr-3 btn btn-light"><a href="index.php">Annuler</a></button>
                      <button name="submit" type="submit" class="btn btn-primary">Publier une Offre</button>
                    </form>
                  </div>
                <?php elseif($_SESSION['role'] != "full"): ?>
                  <div class="alert alert-danger alert-dismissible">
                    Vous ne pouvez pas créer d'offre, cette option est unique réservée aux administrateurs avec toutes les autorisations. 
                    Veuillez contacter l'administrateur principal si nécessaire
                  </div>
                <?php endif ?>
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
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:26 GMT -->
</html>
