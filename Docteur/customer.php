<?php 

include "dbconn.php";
include "sql.php";
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    
	$method=$_POST['method'];
	$dtbs = new sql();
	$retval = [];

	// debut patient
     if($method == 'list_patient'){
		 $id=$_POST['id'];
      
		$list = $dtbs->list_patient($id);
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}
	if($method == 'new_patient'){

		$nom = $_POST['nom'];
		$nm = $_POST['nm'];
		$adr= $_POST['adr'];
		$tel = $_POST['tel'];
		$sexe = $_POST['sexe'];
		$salle = $_POST['salle'];
		$dg = $_POST['dg'];
		$age= $_POST['age'];
		$id= $_POST['id'];
       
		
		$new = $dtbs->new_patient($nom,$nm,$adr,$tel,$sexe,$salle,$dg,$age,$id);
		$retval['status'] = $new[0];
		$retval['message'] = $new[1];
		echo json_encode($retval);
	}

	if($method == 'urgencePatient'){

		
		
		$id= $_POST['id'];
		$idp= $_POST['idp'];
		$ids= $_POST['ids'];
       
		
		$new = $dtbs->urgencePatient($id,$idp,$ids);
		$retval['status'] = $new[0];
		$retval['message'] = $new[1];
		echo json_encode($retval);
	}

	if($method == 'editPatient'){
		$idp= $_POST['idp'];
		$nom = $_POST['nom'];
		$nm = $_POST['nm'];
		$adr= $_POST['adr'];
		$tel = $_POST['tel'];
		$sexe = $_POST['sexe'];
		$salle = $_POST['salle'];
		$dg = $_POST['dg'];
		$age= $_POST['age'];
		$id= $_POST['id'];
       
		
 
		 $edit = $dtbs->editPatient($idp,$nom,$nm,$adr,$tel,$sexe,$salle,$dg,$age,$id);
		 $retval['status'] = $edit[0];
		 $retval['message'] = $edit[1];
		 echo json_encode($retval);
	 }

	if($method == 'deletePatient'){
		$id = $_POST['id_cust'];
		$delete = $dtbs->deletePatient($id);
		$retval['status'] = $delete[0];
		$retval['message'] = $delete[1];
 		echo json_encode($retval);
	}




	

}else{
	header("HTTP/1.1 401 Unauthorized");
    exit;
}