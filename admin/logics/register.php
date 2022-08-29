<?php
  include "./filter/auth.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nouvel Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
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
            <?php if(isset($errors)): ?>
              <?php foreach($errors as $error): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <?= $error ?>
                </div>
              <?php endforeach ?>
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
              <h4>Nouvel Admin ?</h4>
              <h6 class="font-weight-light">Assurez vous de lui assigner un role</h6>
              <form class="pt-3" method="POST" autocomplete="off">
                <div class="form-group">
                  <input name="name" type="text" class="form-control form-control-lg" required="required" placeholder="Ex: Elie">
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-lg" required="required" placeholder="Ex: elimetusela@gmail.com">
                </div>
                <div class="form-group">
                  <select name="role" class="form-control form-control-lg" placeholder="Admin role">
                    <option value="">Role de l'Admin</option>
                    <option value="full">Full Admin</option>
                    <option value="simple">Simpple Admin</option>
                  </select>
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" required="required" placeholder="Password">
                </div>
                <div class="form-group">
                  <input name="password_confirm" type="password" class="form-control form-control-lg" required="required" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input required="required" type="checkbox" class="form-check-input">
                      J'accepte tous les termes et conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input name="submit" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous avez deja un compte ? <a href="login.php" class="text-primary">Connectez vous</a>
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

</html>