<!DOCTYPE html>
<html lang="en">

             
              


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Clinic</title>
  <!-- General CSS Files -->
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/css/app.min.css">
      <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="iziToast.min.css">
  <!-- Template CSS -->
    
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/GHicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
       
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
       
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link message-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
              <div id="bel">
             
              </div>
               
              
              </a>
               <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notification
                <div class="float-right">
                  <a href="#"></a>
                </div>
              </div>
                    <div class="dropdown-list-content dropdown-list-message">
                 
                   </div>
                    <div class="dropdown-footer text-center">
                <a href="listeRapport.php">Voir tous les Notification <i class="fas fa-chevron-right"></i></a>
              </div>
              </div>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/doctt.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Bienvenue DR.<?php echo $login_session; ?> </div>
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="../Login/php/logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
            D??conection
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <a href=""> <img alt="image" src="assets/favicon_io/android-chrome-192x192.png" class="header-logo" />
                        </a>
          </div>
          <ul class="sidebar-menu">

<li class="dropdown active">
    <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Accueil</span></a>
</li>
<li class="dropdown">
    <a href="listePatient.php" class="nav-link"><i class="fas fa-procedures"></i><span>Patient</span></a>

</li>

<li class="dropdown">
    <a href="liste de salle.php" class="nav-link"><i class="
fas fa-hospital"></i><span>Salle</span></a>
</li>



<li class="dropdown">
    <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-user-cog"></i><span>Parametre</span></a>
    <ul class="dropdown-menu">
        <li>
            <a href="profile.php" class="dropdown-item has-icon text-warning"> <i class="far
fa-user"></i> Profile
            </a>
        </li>
        <li>
            <a href="../Login/php/logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i> D??conection
            </a>
        </li>

    </ul>
</li>
</ul>
            </li>
          </ul>
        </aside>
      </div>
    

    
      </div>
      