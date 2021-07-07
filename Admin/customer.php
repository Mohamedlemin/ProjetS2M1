<?php

include "dbconn.php";
include "sql.php";
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

	$method = $_POST['method'];
	$dtbs = new sql();
	$retval = [];

	// debut service
	if ($method == 'list_service') {

		$list = $dtbs->list_service();
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}
	if ($method == 'new_service') {

		$code = $_POST['cd'];
		$nm = $_POST['nm'];
		$bt = $_POST['bt'];
		$dr = $_POST['dr'];


		$new = $dtbs->new_service($code, $nm, $bt, $dr);
		$retval['status'] = $new[0];
		$retval['message'] = $new[1];
		echo json_encode($retval);
	}
	if ($method == 'editService') {
		$id = $_POST['id'];
		$code = $_POST['cd'];
		$nm = $_POST['nm'];
		$bt = $_POST['bt'];
		$dr = $_POST['dr'];



		$edit = $dtbs->editService($id, $code, $nm, $bt, $dr);
		$retval['status'] = $edit[0];
		$retval['message'] = $edit[1];
		echo json_encode($retval);
	}
	if ($method == 'deleteService') {
		$id = $_POST['id_cust'];
		$delete = $dtbs->deleteService($id);
		$retval['status'] = $delete[0];
		$retval['message'] = $delete[1];
		echo json_encode($retval);
	}
	//fin service
	
	//------------------Docteur------------------------------------
	//liste Docteure 
	if ($method == 'list_Docteur') {

		$list = $dtbs->list_Docteur();
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}
	//ADD doc
	if ($method == 'new_Docteur') {

		$Nom = $_POST['Nom'];
		$Numéro = $_POST['Numéro'];
		$Adresse = $_POST['Adresse'];
		$tel = $_POST['tel'];
		$speciealite = $_POST['speciealite'];
		$Username = $_POST['Username'];
		$password = $_POST['password'];



		$new = $dtbs->new_Docteur($Nom, $Numéro, $Adresse, $tel, $speciealite, $Username, $password);
		$retval['status'] = $new[0];
		$retval['message'] = $new[1];
		echo json_encode($retval);
	}
	//Edit doc
	if ($method == 'editDocteur') {
		$id = $_POST['id'];

		$Nom = $_POST['Nom'];
		$Numéro = $_POST['Numéro'];
		$Adresse = $_POST['Adresse'];
		$tel = $_POST['tel'];
		$speciealite = $_POST['speciealite'];
		$Username = $_POST['Username'];
		$password = $_POST['password'];



		$edit = $dtbs->editDocteur($id, $Nom, $Numéro, $Adresse, $tel, $speciealite, $Username, $password);
		$retval['status'] = $edit[0];
		$retval['message'] = $edit[1];
		echo json_encode($retval);
	}
	//delete doc
	if ($method == 'deleteDocteur') {
		$id = $_POST['id_cust'];
		$delete = $dtbs->deleteDocteur($id);
		$retval['status'] = $delete[0];
		$retval['message'] = $delete[1];
		echo json_encode($retval);
	}
	//------------------Infirmière ------------------------------------
	//liste Infirmière  
	if ($method == 'list_Inf') {

		$list = $dtbs->list_Inf();
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}
//ADD Inf
if ($method == 'new_Inf') {

	$Nom = $_POST['Nom'];
	$Prénom = $_POST['Prenom'];
	$Adresse = $_POST['Adresse'];
	$tel = $_POST['tel'];
	$Rotation = $_POST['Rotation'];
	$Salaire = $_POST['Salaire'];
	$Code = $_POST['code'];
	$serv = $_POST['serv'];



	$new = $dtbs->new_Inf($Nom, $Prénom, $Adresse, $tel, $Rotation, $Salaire, $Code,$serv);
	$retval['status'] = $new[0];
	$retval['message'] = $new[1];
	echo json_encode($retval);
}
//Edit Inf
if ($method == 'editInf') {
	$id = $_POST['id'];
	$Nom = $_POST['Nom'];
	$Prénom = $_POST['Prenom'];
	$Adresse = $_POST['Adresse'];
	$tel = $_POST['tel'];
	$Rotation = $_POST['Rotation'];
	$Salaire = $_POST['Salaire'];
	$Code = $_POST['code'];
	$serv = $_POST['serv'];




	$edit = $dtbs->editInf($id,$Nom, $Prénom, $Adresse, $tel, $Rotation, $Salaire, $Code,$serv);
	$retval['status'] = $edit[0];
	$retval['message'] = $edit[1];
	echo json_encode($retval);
}
	//delete Inf
	if ($method == 'deleteInf') {
		$id = $_POST['id_cust'];
		$delete = $dtbs->deleteInf($id);
		$retval['status'] = $delete[0];
		$retval['message'] = $delete[1];
		echo json_encode($retval);
	}
	//debut salle
	if($method == 'list_salle'){
      
		$list = $dtbs->list_salle();
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}

	if($method == 'deleteSalle'){
		$id = $_POST['id_cust'];
		$delete = $dtbs->deleteSalle($id);
		$retval['status'] = $delete[0];
		$retval['message'] = $delete[1];
 		echo json_encode($retval);
	}
	

	if($method == 'new_salle'){

		$sr = $_POST['sr'];
		$nm = $_POST['nm'];
		$nb= $_POST['nb'];
		
       
		
		$new = $dtbs->new_salle($sr,$nm,$nb);
		$retval['status'] = $new[0];
		$retval['message'] = $new[1];
		echo json_encode($retval);
	}
	if($method == 'editSalle'){
		$id =$_POST['id'];
		$sr = $_POST['sr'];
		$nm = $_POST['nm'];
		$nb= $_POST['nb'];
		
		 
		
 
		 $edit = $dtbs->editSalle($id,$sr,$nm,$nb);
		 $retval['status'] = $edit[0];
		 $retval['message'] = $edit[1];
		 echo json_encode($retval);
	 }
	

} else {
	header("HTTP/1.1 401 Unauthorized");
	exit;
}