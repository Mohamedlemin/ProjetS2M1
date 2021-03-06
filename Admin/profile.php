 <!-- include header -->
 <?php
    include('Admin_Session.php');
    include 'header.html'; ?>

 <!-- debut du contenu de l app -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Profile</h1>
             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></div>
                 <div class="breadcrumb-item active"><i class="far fa-user"></i> Profile</div>
             </div>
         </div>
         <div class="section-body">


             <div class="row mt-sm-4">
                 <div class="col-12 col-md-12 col-lg-5">
                     <div class="card profile-widget">
                         <div class="profile-widget-header">
                             <img alt="image" src="assets/img/avatar/doctt.png"
                                 class="rounded-circle profile-widget-picture">

                         </div>
                         <div class="profile-widget-description">
                             <div class="profile-widget-name" style="text-align: center;">Administrateur <br>
                             </div>
                             <div class="py-4" id="info">
                                 <p class="clearfix">
                                     <span class="float-left">
                                         Nom Complet
                                     </span>
                                     <span class="float-right text-muted">
                                         <?php echo ($_SESSION['Admin_nomComplet']); ?>
                                     </span>
                                 </p>


                                 <p class="clearfix">
                                     <span class="float-left">
                                         Nom utilisateur
                                     </span>
                                     <span class="float-right text-muted">
                                         <?php echo ($_SESSION['Admin_username']); ?>
                                     </span>
                                 </p>
                                 <p class="clearfix">
                                     <span class="float-left">
                                         Email
                                     </span>
                                     <span class="float-right text-muted">
                                         <?php echo ($_SESSION['Admin_nomComplet']); ?>@gmail.com
                                     </span>
                                 </p>



                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="col-12 col-md-12 col-lg-7">
                     <div class="card">
                         <form method="post" class="needs-validation" novalidate="" action="editProfil.php">
                             <div class="card-header">
                                 <h4>Edit Profile</h4>
                             </div>
                             <div class="card-body">
                                 <div class="row">
                                     <div class="form-group col-md-6 col-12">
                                         <label>Nom Complet</label>
                                         <input type="text" name="nomc" class="form-control"
                                             value=" <?php echo ($_SESSION['Admin_nomComplet']); ?>" required="">
                                         <div class="invalid-feedback">Verfier votre nom</div>
                                     </div>
                                     <div class="form-group col-md-6 col-12">
                                         <label>Nom utilisateur</label>
                                         <input type="text" name="nom" class="form-control"
                                             value="<?php echo ($_SESSION['Admin_username']); ?>" required="">
                                         <div class="invalid-feedback">Verfier votre username</div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="form-group col-md-7 col-12">
                                         <label>Email</label>
                                         <input type="email" class="form-control"
                                             value=" <?php echo ($_SESSION['Admin_nomComplet']); ?>@gmail.com"
                                             required="">
                                         <div class="invalid-feedback">verifier votre email</div>
                                     </div>

                                 </div>
                             </div>
                             <div class="card-footer text-right">
                                 <button type="submit" class="btn btn-primary" name="ajoute">Save Changes</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>

     </section>

 </div>
 <!-- fin Content -->
 <!-- include footer -->
 <?php include 'footer.html'; ?>