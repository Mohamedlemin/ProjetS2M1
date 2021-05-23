<?php 

include "dbconn.php";
include "sql.php";
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    
     if($method == 'list_service'){
      
		$list = $dtbs->list_service();
		$retval['status'] = $list[0];
		$retval['message'] = $list[1];
		$retval['data'] = $list[2];
		echo json_encode($retval);
	}
	


}else{
	header("HTTP/1.1 401 Unauthorized");
    exit;
}