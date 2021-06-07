<?php 

include "dbconn.php";
include "sql.php";
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    
	$method=$_POST['method'];
	$dtbs = new sql();
	$retval = [];

	// debut service
     if($method == 'list_service'){
      
		$list = $dtbs->list_service();
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}
	if($method == 'new_service'){

		$code = $_POST['cd'];
		$nm = $_POST['nm'];
		$bt= $_POST['bt'];
		$dr = $_POST['dr'];
       
		
		$new = $dtbs->new_service($code,$nm,$bt,$dr);
		$retval['status'] = $new[0];
		$retval['message'] = $new[1];
		echo json_encode($retval);
	}
	if($method == 'editService'){
		$id =$_POST['id'];
		$code = $_POST['cd'];
		$nm = $_POST['nm'];
		$bt= $_POST['bt'];
		$dr = $_POST['dr'];
		 
		
 
		 $edit = $dtbs->editService($id,$code,$nm,$bt,$dr);
		 $retval['status'] = $edit[0];
		 $retval['message'] = $edit[1];
		 echo json_encode($retval);
	 }
	 if($method == 'deleteService'){
		$id = $_POST['id_cust'];
		$delete = $dtbs->deleteService($id);
		$retval['status'] = $delete[0];
		$retval['message'] = $delete[1];
 		echo json_encode($retval);
	}
	//fin service
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
	


}else{
	header("HTTP/1.1 401 Unauthorized");
    exit;
}