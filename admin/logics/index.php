<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:23 GMT -->
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
          <?php if(isset($_SESSION["success_admin"])): ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $_SESSION["success_admin"] ?>
              </div>
          <?php endif ?>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Bienvenue <?= $_SESSION['name'] ?></h3>
                  <h6 class="font-weight-normal mb-0 upper_case"><?= $_SESSION['role'] ?> Admin</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i>Nous sommes le:<br> <?= date("d/m/Y") ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>

          <div class="">
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Demande de stages</p>
                      <p class="fs-30 mb-2"><?= count($All_apply)." Candidatures" ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Totale projets</p>
                      <p class="fs-30 mb-2"><?= count($All_project)." Projets" ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Totale offres</p>
                      <p class="fs-30 mb-2"><?= count($All_offres)." Offres" ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Totale d'offres</p>
                      <p class="fs-30 mb-2"><?= count($All_news)." Actualités" ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Dépôt de candidature</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Quote#</th>
                              <th>Nom & Post-nom</th>
                              <th>Ville</th>
                              <th>Domaine</th>
                              <th>Poste</th>
                              <th>Niveau d'études</th>
                              <th>Cv</th>
                              <th>Lettre de motivation</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($stages as $key => $stage): ?>
                              <tr>
                                  <th scope="row"><?= $key + 1 ?></th>
                                  <td><?= $stage->name ?></td>
                                  <td><?= $stage->location ?></td>
                                  <td><?= $stage->domain ?></td>
                                  <td><?= $stage->applied_offer ?></td>
                                  <td><?= $stage->niveau ?></td>
                                  <td><a href="<?= $stage->files_url ?>"><?= $stage->files_name ?></a></td>
                                  <td><a href="<?= $stage->files_url2 ?>"><?= $stage->files_name2 ?></a></td>
                              </tr>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      </div><br>
                      <a href="stage_show.php" style="color: #77a60c"><b>Voir tous </b><i class="fa fa-arrow-down"></i></a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
              <div class="card">
                <div class="card-body own_card-body">
                  <p class="card-title">Contact mails</p>
                  <ul class="icon-data-list">
                    <?php foreach($contacts as $contact): ?>
                      <li>
                        <div class="d-flex">
                          <img src="images/faces/face1.jpg" alt="user">
                          <div>
                            <p class="text-info mb-1"><?= $contact->name ?></p>
                            <p class="mb-0"><?= $contact->message ?></p>
                            <small><b><?= $contact->email ?></b></small><br>
                            <small><?= $contact->created_at ?></small>
                          </div>
                        </div>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Projets par sponsores</p>
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pl-0  pb-2 border-bottom">Sponsores</th>
                          <th class="border-bottom pb-2">Nombre de projets</th>
                          <th class="border-bottom pb-2">Zones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0">UNICEF</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">65</span></p></td>
                          <td class="text-muted">Masisi, Rutshuru, Mukenzi</td>
                        </tr>
                        <tr>
                          <td class="pl-0">DMCDD</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">54</span></p></td>
                          <td class="text-muted">Masisi, Jamba, Minova</td>
                        </tr>
                        <tr>
                          <td class="pl-0">PNUD CANADA</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">22</span></p></td>
                          <td class="text-muted">Walungu, Kamituga, Ngweshe, Nyangenzi</td>
                        </tr>
                        <tr>
                          <td class="pl-0">FHRDC</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">46</span></p></td>
                          <td class="text-muted">Kabarhe, Kalehe, Mugogo, Nyamitaba</td>
                        </tr>
                        <tr>
                          <td class="pl-0">WAR Child</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">17</span></p></td>
                          <td class="text-muted">Walikale, Miti, Katana</td>
                        </tr>
                        <tr>
                          <td class="pl-0">UNFPA</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">52</span></p></td>
                          <td class="text-muted">Kanangam Budjimai, Mweso</td>
                        </tr>
                        <tr>
                          <td class="pl-0">FHRDC</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">46</span></p></td>
                          <td class="text-muted">Kabarhe, Kalehe, Mugogo, Nyamitaba</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="mt-3">
                      <a href="create_project.php" class="btn btn-primary">Creer un projet</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Tous les projets</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Noms du projet</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Paramettre</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>AAP/PSEA, diminution de de crime commis par les humanitaire.</td>
                          <td class="font-weight-bold"><span class="badge badge-success">Pause</span></td>
                          <td>21 Sep 2018 -<br>13 Mars 2022</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success"><a href="#">Edit</a></div><br>
                            <div class="badge badge-warning"><a href="#">Cacher</a></div><br>
                            <div class="badge badge-danger"><a href="#">Supprimer</a></div>
                          </td>
                        </tr>
                        <tr>
                          <td>Search Engine Optimization</td>
                          <td class="font-weight-bold">$116</td>
                          <td>13 Jun 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        <tr>
                          <td>Display Advertising</td>
                          <td class="font-weight-bold">$551</td>
                          <td>28 Sep 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                          <td>Pay Per Click Advertising</td>
                          <td class="font-weight-bold">$523</td>
                          <td>30 Jun 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                          <td>E-Mail Marketing</td>
                          <td class="font-weight-bold">$781</td>
                          <td>01 Nov 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                        </tr>
                        <tr>
                          <td>Referral Marketing</td>
                          <td class="font-weight-bold">$283</td>
                          <td>20 Mar 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                          <td>Social media marketing</td>
                          <td class="font-weight-bold">$897</td>
                          <td>26 Oct 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                      </tbody>
                    </table>
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
	if($pageWasRefreshed && isset($_SESSION['success_admin'])) {
		unset ($_SESSION['success_admin']);
	} else {
	//do nothing;
	}
?>

<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:30:23 GMT -->
</html>

