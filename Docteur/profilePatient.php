<?php
include('Docteur_Session.php');
include 'header.html'; ?>


<!-- Start app main Content -->
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tv"></i></a></li>
                <li class="breadcrumb-item"><a href="listePatient.php"><i class="fas fa-procedures"></i> Liste Patient
                    </a></li>
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-user"></i> Profile Patient </a></li>


            </ol>
        </nav>
        <div class="card-box profile-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img class="avatar">S</a>
                            </div>

                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0"></h3>
                                        <small class="text-muted">Sidi Ahmed</small>
                                        <div class="staff-id">Nom :Sidi </div>
                                        <div class="staff-id">Prenom :Sidi </div>
                                        <div class="staff-id">Age :34 </div>

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Num:</span>
                                            <span class="text">45567</span>
                                        </li>
                                        <li>
                                            <span class="title">Tel:</span>
                                            <span class="text">45567</span>
                                        </li>
                                        <li>
                                            <span class="title">Adresse:</span>
                                            <span class="text">hifo</span>
                                        </li>
                                        <li>
                                            <span class="title">Sexe:</span>
                                            <span class="text">homme</span>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-tabs">
            <ul class="nav  nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                <li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">information </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Diagnostics</a></li>

            </ul>
        </div>
        <div class="tab-content">
            <!--debut lien information personnel du patient -->
            <div class="tab-pane show active" id="about-cont">




                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title"> Hospitalisation</h3>
                            <ul class="personal-info">
                                <li>
                                    <span class="title">Nom Service</span>
                                    <span class="text">Pediatrie</span>
                                </li>
                                <li>
                                    <span class="title">Directeur:</span>
                                    <span class="text">Ahmed Sidi</span>
                                </li>
                                <li>
                                    <span class="title">Numero Salle:</span>
                                    <span class="text">5</span>
                                </li>
                                <li>
                                    <span class="title">Numero lit:</span>
                                    <span class="text"> 5</span>
                                </li>



                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="bottom-tab2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="boxs mail_listing">
                                <div class="inbox-body no-pad">
                                    <section class="mail-list">
                                        <div class="mail-sender">
                                            <div class="mail-heading">

                                            </div>
                                            <hr>
                                            <div class="media">

                                                <div class="media-body">
                                                    <span class="date pull-right">4:15AM 04 April 2017</span>
                                                    <h5 class="text-primary">Malade:Sarah Smith</h5>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="view-mail p-t-20">
                                            <p>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel
                                                accumsan augue
                                                egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat
                                                risus.
                                                Mauris
                                                sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales
                                                vulputate urna,
                                                vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor
                                                eu
                                                consequat
                                                risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus
                                                sodales
                                                vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem
                                                lobortis porttitor
                                                eu consequat risus. Mauris sed congue orci.</p>

                                        </div>


                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>








                    <?php include 'footer.html'; ?>