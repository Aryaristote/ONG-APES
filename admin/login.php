<?php
  include "logics/login.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APES Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" type="image/png" href="../wp-content/favIcons/android-icon-36x361.png">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <?php if(isset($error)): ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $error ?>
              </div>
            <?php elseif(isset($success)): ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $success ?>
              </div>
            <?php endif ?>
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../wp-content/uploads/revslider/slider-2/apeslogo.png" style="width: 100px" alt="logo">
              </div>
              <h4>Hello!</h4>
              <h6 class="font-weight-light">Connectez vous pour commencer.</h6>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" require="required" name="email" placeholder="Address mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" require="required" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input name="submit" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Gardez-moi connecté
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
</body>


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:27 GMT -->
</html>
