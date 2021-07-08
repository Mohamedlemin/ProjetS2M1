<?php  

include('Docteur_Session.php');
include 'header.php';



?>



  <!-- Start app main Content -->
 <!-- Main Content -->
      <div class="main-content">
           
        <section class="section">
                 <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tv"></i></a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-procedures"></i> Liste Patient </a></li>
                      
                       
                      </ol>
                    </nav>
                  <div class="row">
              <div class="col-12">
                <div class="card">
                   
                  <div class="card-header">
                      <button  class="btn btn btn-primary btn-rounded btn-add" id="btn-add" ><i class="fas fa-plus-circle"></i> Ajouter Patient</button>
                      
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                     <table id="tablepatient" class="table  table-striped">
                        <thead>
                          <tr>
                            <th class="text-center">
                            <i class='fas fa-wheelchair'></i>
                            </th>
                            <th>NUMERO</th>
                            <th>NOM</th>
                           
                            <th>SEXE</th>
                         <th>ACTION</th>
                          </tr>
                        </thead>
                     </table>
                  
                    </div>
                       
                  </div>
                     <input type="hidden"  id="id">
                   
 
                </div>
              </div>
            </div>
            </section>
            <div class="modal fade" id="modal-patient" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Ajouter Visite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="add_user1">
                    
                   <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>NOM COMPLET*</label>
                                <input type="text" class="form-control" id="nom"  required>
                              
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>NUMERO*</label>
                                <input type="number" class="form-control" id="num" required>
                               
                              </div>
                            </div>

                    

                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>ADRESSE*</label>
                                <input type="text" class="form-control" id="adr"  required>
                              
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>TELEPHONE*</label>
                                <input type="number" class="form-control" id="tel" required>
                               
                              </div>
                            </div>

                            
                        <div class="row">
                          <div class="form-group col-md-6 col-12"> 
                            
                                <label>SEXE*</label>
                               <select class="form-control" id="sexe">
                                  <option value="Homme">Homme</option>
                                  <option value="Femme">Femme</option>

                                </select>
                           </div>
                           <div class="form-group col-md-6 col-12"> 
                            
                            <label>Age*</label>
                            <input type="number" class="form-control" id="age" required>
                          
                       </div>
                       </div>

                         
                 
                      
                   
                       <div class="form-group"> 
                            
                            <label>SALLE</label>
                           <select class="form-control" id="salle">
                           <?php
                                      
                                      


                                        $result = mysqli_query($con, "select * from service where directeur='$user_check'");


                                        while ($row = mysqli_fetch_array($result)) {
                                            $ids = $row['ids'];

                                        }

                                        $result1 = mysqli_query($con, "select * from salle where code='$ids' and (salle.nombreLits not in (select numlit from hospitaliser join salle where hospitaliser.id=salle.id))");
                             
                                        while ($row = mysqli_fetch_array($result1)) {
                                          $idss=$row['id'];
                                          $num=$row['numero'];




                                        ?>
                                     <option value="<?php echo $idss; ?>"><?php echo $num; ?></option>

                                     <?php
                                        }

                                        ?>
                            </select>
                       </div>    
                       
                    
                    <div class="form-group">
                      <label>DIAGNOSTIC</label>
                       <textarea class="form-control" id="dg" required></textarea>
                    </div>
                  
           
                        
                    <input type="hidden" id="idp">
                      <input type="hidden" id="crud">
                     <input type="hidden" id="idv" value=" <?php  echo $user_check; ?>">
                                  
								
                 
                   
                   
                     
                  <button type="button" class="btn btn-outline-primary m-t-15 waves-effect" id="btn-save">Enregistrer</button>
                     <input type="reset" class="btn btn-outline-danger m-t-15 waves-effect" value="Annuler">
                </form>
              </div>
            </div>
          </div>
        </div>
          

  
        <div class="modal fade" id="modal-urgence" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Urgence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="add_user1">
                <div class="form-goup">
                                 <label for="inputPassword4">Service</label>
                                 <select id="service" class="form-control">
                                    
                      <?php 
                           //la connexion avec la base de données
           
                            
                $result = mysqli_query($con,"select ids,nom from service");
					
                              
					while($row = mysqli_fetch_array($result)) {
                        $id=$row['ids'];
                         
                           $var=$row['nom'];
                              
                          
                    
                          
                    ?>
                        <option value="<?php echo $id;?>"><?php echo $var;?></option>
                       
                    <?php
                          }
                              
                    ?>
                                 </select>
                             </div>
                       
                    
                 
           
                        
                    <input type="hidden" id="idpp">
                      
                                  
								
                 
                   
                   
                     
                  <button type="button" class="btn btn-outline-primary m-t-15 waves-effect" id="btn-urgence">Enregistrer</button>
                     <input type="reset" class="btn btn-outline-danger m-t-15 waves-effect" value="Annuler">
                </form>
              </div>
            </div>
          </div>
        </div>
          





 </div>
            
            
            
                
         
<?php  include 'footer.html'; ?>
             <script type="text/javascript">
		$(document).ready(function(){

      setInterval(function(){
                    
                  
                  
                    $("#bel").load("load.php");
                    $(".dropdown-list-content").load("load1.php");
                
             
              
                
              
                
               
            },1000);
            $('#table-urgence').DataTable({
           
         });

      	$('#tablepatient').DataTable({
                "autoWidth": false,


"fnDrawCallback": function(oSettings) {},
"ajax": {
    "url": "customer.php",
    "type": "POST",
    "data": {
        method: "list_patient",
        id:$("#idv").val()

    },
    error: function(request, textStatus, errorThrown) {
        swal(request.responseJSON.message);
    }
},

columns: [
  { "data": null,render :  function ( data, type, full, meta ) {
					return  "<i class='fas fa-wheelchair'></i>"
				}},
    {
        "data": "numero"
    },
    {
        "data": "nom"
    },
    {
        "data": "sexe"
    },
   
    {
        "data": null,
        render: function(data, type, row) {

    return "<button  class='btn btn-icon btn-primary btn-edit'  title='modifier patient'><i class='far fa-edit'></i></button> <button  class='btn btn-icon btn-info btn-d'   title='detail patient'><i class='fas fa-eye'></i></button> <button  class='btn btn-icon btn-warning btn-hapus' data-toggle='tooltip' data-placement='top' title='supprimer patient'><i class='fas fa-trash-alt'></i></button> <button  class='btn btn-icon btn-danger btn-urg' data-toggle='tooltip' data-placement='top' title='transfer patient'><i class='fas fa-times-circle'></i></button> ";
  }
    },
    
]
				
  });
  //le modele d ajjout patient
  $("#btn-add").click(function() {
        $("#modal-patient").modal("show");
        $('.modal-title').text("Ajouter patient");
        $("#num").val("");
        $("#nom").val("");
        $("#tel").val("");
        $("#sexe").val("");
        $("#salle").val("");
        $("#dg").val("");
        $("#age").val("");
        $("#adr").val("");
        $("#crud").val("N");

       

    });
     //Ajouter  ou modifier patient
     $("#btn-save").click(function() {

        if ($("#crud").val() == 'N') {



    ajoutP($("#nom").val(),$("#num").val(),$("#adr").val(),$("#tel").val(),$("#sexe option:selected").attr("value"),$("#age").val(),$("#salle option:selected").attr("value"),$("#dg").val(),$("#idv").val());

} else {

    editP($("#idp").val(),$("#nom").val(),$("#num").val(),$("#adr").val(),$("#tel").val(),$("#sexe option:selected").attr("value"),$("#age").val(),$("#salle option:selected").attr("value"),$("#dg").val(),$("#idv").val());


}
});
 //Mdifier patient
 $(document).on("click", ".btn-edit", function() {
        var current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        var table = $('#tablepatient').DataTable();
        var data = table.row(current_row).data();
        $("#num").val(data.numero);
        $("#nom").val(data.nom);
        $("#tel").val(data.tel);
      
     
        $("#dg").val(data.diagnostic);
        $("#age").val(data.age);
        $("#adr").val(data.adresse);
        $("#idp").val(data.id);
      
       
      
        if ($("input[id=sexe]").val() == data.sexe) {
            $("input[id=sexe]").prop("checked", true);


        }
        if ($("input[id=salle]").val() == data.salle) {
            $("input[id=salle]").prop("checked", true);


        }

        $("#modal-patient").modal("show");
        setTimeout(function() {
            $("#txtname").focus()
        }, 1000);

        $("#crud").val("E");

    });
    // fin edit patient



    //urgence patient
 $(document).on("click", ".btn-urg", function() {
        var current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        var table = $('#tablepatient').DataTable();
        var data = table.row(current_row).data();
       
        $("#idpp").val(data.id);
      
       
      
       
        $("#modal-urgence").modal("show");
        setTimeout(function() {
            $("#txtname").focus()
        }, 1000);

        

    });
    // fin urgence patient
    //urgence patient patient
    $("#btn-urgence").click(function() {
      urgence($("#idv").val(),$("#idpp").val(),$("#service option:selected").attr("value"));



               
      
    });
               
  $(document).on("click",".btn-d",function(){
    let current_row = $(this).parents('tr'); 
			if (current_row.hasClass('child')) { 
				current_row = current_row.prev(); 
			}
			let table = $('#tablepatient').DataTable(); 
			let data = table.row( current_row).data();
			let id = data.id;
            window.location.href="profilePatient.php?id="+id;
		
		});


      //supprimer patient

      $(document).on("click", ".btn-hapus", function() {
        let current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        let table = $('#tablepatient').DataTable();
        let data = table.row(current_row).data();
        let idcust = data.id;
        swal({
                title: 'Vous etes sure?',
                text: 'Voulez-vous supprimer ce patient!',
                icon: 'error',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    let ajax = {
                        method: "deletePatient",
                        id_cust: idcust,
                    }
                    $.ajax({
                        url: "customer.php",
                        type: "POST",
                        data: ajax,
                        success: function(data, textStatus, jqXHR) {

                            $resp = JSON.parse(data);
                            if ($resp['status'] == true) {
                                swal('Success! le patient a été supprimé  avex success!!', {
                                    icon: 'success',
                                });



                                let xtable = $('#tablepatient').DataTable();
                                xtable.ajax.reload(null, false);
                            } else {
                                swal('Error', 'le patient n a pas été supprimé!',
                                    'error');
                            }

                        },
                        error: function(request, textStatus, errorThrown) {
                            swal("Error ", request.responseJSON.message, "error");
                        }
                    });

                }
            });

    });
    // fin supprim patient



     //fonction ajout patient
     function ajoutP(nom,nm,adr,tel,sexe,age,salle,dg,id) {
        let ajax = {
            method: "new_patient",
            nom: nom,
            nm: nm,
            adr: adr,
            tel: tel,
            sexe:sexe,
            salle:salle,
            dg:dg,
            age:age,
            id:id
        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modal-patient").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'le patient a eté ajouter avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tablepatient').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.warning({
                        title: 'Erreur!',
                        message: 'le patient n a pas eté ajouter avec success!',
                        position: 'topRight'
                    });
                }
            },
            error: function(request, textStatus, errorThrown) {
                swal("Error ", request.responseJSON.message, "error");
            }
        });
    }
    // fin fonction ajout patient
    
    //fonction MODIF Service

    function editP(idp,nom,nm,adr,tel,sexe,age,salle,dg,id) {
        let ajax = {
            method: "editPatient",
            idp:idp,
            nom: nom,
            nm: nm,
            adr: adr,
            tel: tel,
            sexe:sexe,
            salle:salle,
            dg:dg,
            age:age,
            id:id




        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modal-patient").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'le service a eté modifier avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tablepatient').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.warning({
                        title: 'Erreur!',
                        message: 'le service n a pas eté modifier avec success!',
                        position: 'topRight'
                    });
                }
            },
            error: function(request, textStatus, errorThrown) {
                swal("Error ", request.responseJSON.message, "error");
            }
        });
    }
       


      //fonction URGENCE

      function urgence(id,idp,ids) {
        let ajax = {
            method: "urgencePatient",
            id:id,
            idp: idp,
            ids: ids
           


        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modal-urgence").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'Operation est fait avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tablepatient').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.warning({
                        title: 'Erreur!',
                        message: 'Operation d ajout  a  eté echoué!',
                        position: 'topRight'
                    });
                }
            },
            error: function(request, textStatus, errorThrown) {
                swal("Error ", request.responseJSON.message, "error");
            }
        });
    }
       
      });
     
       </script>