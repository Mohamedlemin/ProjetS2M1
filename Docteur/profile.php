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

                <li class="breadcrumb-item"><a href="#"><i class="fas fa-user"></i> Profile </a></li>


            </ol>
        </nav>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center" id="profit">
                                <img alt="image" src="assets/img/doctt.png" class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <div class="author-box-name">
                                    <a href="#">mohamed sidi</a>
                                </div>
                                <div class="author-box-job">docteur</div>
                            </div>
                            <div class="py-4" id="info">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Telephone
                                    </span>
                                    <span class="float-right text-muted">
                                        33334
                                    </span>
                                </p>

                                <p class="clearfix">
                                    <span class="float-left">
                                        Adresse
                                    </span>
                                    <span class="float-right text-muted">
                                        kifffa
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Specialité
                                    </span>
                                    <span class="float-right text-muted">
                                        Pediatrie
                                    </span>
                                </p>



                            </div>

                        </div>
                    </div>


                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="padding-20">

                            <div class="tab-content tab-bordered" id="myTab3Content">

                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                    aria-labelledby="home-tab2">
                                    <form id="add_user1">

                                        <div class="form-group">
                                            <label>Nom</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" placeholder="Nom" value=""
                                                    id="nom">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Prenom</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" placeholder="prenom" value=""
                                                    id="prenom">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" placeholder="Adresse" value=""
                                                    id="prenom">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Specialité</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" placeholder="prenom" value=""
                                                    id="prenom">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-phone"></i>
                                                    </div>
                                                </div>
                                                <input type="text" id="tel" value="" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" value="" placeholder="username"
                                                    id="user">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" value=""
                                                    placeholder="Password" id="password">
                                            </div>
                                        </div>




                                        <input type="hidden" id="crud">
                                        <input type="hidden" value="<?php echo $idc; ?>" id="idc">
                                        <input type="hidden" id="id" value="<?php echo $id1; ?>">


                                        <button type="button" class="btn btn-outline-primary m-t-15 waves-effect"
                                            id="btn-save">Modifier</button>
                                        <button type="button"
                                            class="btn btn-outline-danger m-t-15 waves-effect">Annuler</button>
                                    </form>





                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>











        <?php include 'footer.html'; ?>