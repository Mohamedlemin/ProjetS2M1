<?php
class sql extends dbconn {
	public function __construct()
	{
		$this->initDBO();
	}
    
    //debut patient
    public function list_patient()
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("select * from  malade");
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
	public function new_service($code,$nm,$bt,$dr)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("insert into service(code,directeur,nom,batiment) values (:code,:directeur,:nom,:batiment)");
			$stmt->bindParam("code",$code);
			$stmt->bindParam("directeur",$dr);
			$stmt->bindParam("nom",$nm);
            $stmt->bindParam("batiment",$bt);
          
			
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success save customer";
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function editService($id,$code,$nm,$bt,$dr)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("update service set code=:code,nom = :nom, directeur = :directeur, batiment = :batiment  where ids = :ids");
			$stmt->bindParam("ids",$id);
			$stmt->bindParam("code",$code);
			$stmt->bindParam("nom",$nm);
			$stmt->bindParam("directeur",$dr);
			$stmt->bindParam("batiment",$bt);
            
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success edit customer";
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function deleteService($id)
	{
		$db = $this->dblocal;
		try
		{
            
        
			$stmt = $db->prepare("delete from service where ids= :ids");
			$stmt->bindParam("ids",$id);
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success delete customer";
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	//fin service
	//fin service
	//debut salle
	public function list_salle()
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("select id,numero,nombreLits,nom from salle,service where salle.code=service.ids");
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

	public function deleteSalle($id)
	{
		$db = $this->dblocal;
		try
		{
            
        
			$stmt = $db->prepare("delete from salle where id= :id");
			$stmt->bindParam("id",$id);
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success delete customer";
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	
    
    public function new_salle($sr,$nm,$nb)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("insert into salle(numero,nombreLits,code) values (:numero,:nombreLits,:code)");
			$stmt->bindParam("numero",$nm);
			$stmt->bindParam("nombreLits",$nb);
			$stmt->bindParam("code",$sr);
			
		
			
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success save customer";
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function editSalle($id,$sr,$nm,$nb)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("update salle set code=:code,nombreLits = :nombreLits, numero = :numero  where id = :id");
			$stmt->bindParam("id",$id);
			$stmt->bindParam("code",$sr);
			$stmt->bindParam("nombreLits",$nb);
			$stmt->bindParam("numero",$nm);

            
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success edit customer";
			return $stat;
		}
		catch(PDOException $ex)
		{
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
    
    
    
   
}