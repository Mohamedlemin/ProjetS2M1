<?php
class sql extends dbconn {
	public function __construct()
	{
		$this->initDBO();
	}
    
    //liste service
    public function list_service()
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("select * from service");
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "List customer";
			$stat[2] = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			$stat[2] = [];
			return $stat;
		}
	}
    
    
    
    
    
   
}