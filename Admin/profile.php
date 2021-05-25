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
                             <img alt="image" src="assets/img/avatar/avatar-1.png"
                                 class="rounded-circle profile-widget-picture">

                         </div>
                         <div class="profile-widget-description">
                             <div class="profile-widget-name">Admin <div class="text-muted d-inline font-weight-normal">
                                     AHMED SIDI</div>
                             </div>
                             <div class="py-4" id="info">
                                 <p class="clearfix">
                                     <span class="float-left">
                                         Nom utilisateur
                                     </span>
                                     <span class="float-right text-muted">
                                         Ahmed
                                     </span>
                                 </p>
                                 <p class="clearfix">
                                     <span class="float-left">
                                         Email
                                     </span>
                                     <span class="float-right text-muted">
                                         Ahmed@gmail.com
                                     </span>
                                 </p>
                                 <p class="clearfix">
                                     <span class="float-left">
                                         mot de passe
                                     </span>
                                     <span class="float-right text-muted">
                                         5687899
                                     </span>
                                 </p>


                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="col-12 col-md-12 col-lg-7">
                     <div class="card">
                         <form method="post" class="needs-validation" novalidate="">
                             <div class="card-header">
                                 <h4>Edit Profile</h4>
                             </div>
                             <div class="card-body">
                                 <div class="row">
                                     <div class="form-group col-md-6 col-12">
                                         <label>Nom Complet</label>
                                         <input type="text" class="form-control" value="Michelle" required="">
                                         <div class="invalid-feedback">Please fill in the first name</div>
                                     </div>
                                     <div class="form-group col-md-6 col-12">
                                         <label>Nom utilisateur</label>
                                         <input type="text" class="form-control" value="Green" required="">
                                         <div class="invalid-feedback">Please fill in the last name</div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="form-group col-md-7 col-12">
                                         <label>Email</label>
                                         <input type="email" class="form-control" value="Michelle@Green.com"
                                             required="">
                                         <div class="invalid-feedback">Please fill in the email</div>
                                     </div>
                                     <div class="form-group col-md-5 col-12">
                                         <label>Mot de passe</label>
                                         <input type="tel" class="form-control" value="">
                                     </div>
                                 </div>


                             </div>
                             <div class="card-footer text-right">
                                 <button class="btn btn-primary">Save Changes</button>
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