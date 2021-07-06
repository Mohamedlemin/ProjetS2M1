<?php
class sql extends dbconn {
	public function __construct()
	{
		$this->initDBO();
	}
    
    //debut patient
    public function list_patient($id)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("select * from  malade,soigner where malade.id=soigner.numero_malade and soigner.numero_docteur like $id");
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
	public function new_patient($nom,$nm,$adr,$tel,$sexe,$salle,$dg,$age,$id)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("insert into malade(numero,nom,adresse,tel,diagnostic,age,sexe) values (:numero,:nom,:adresse,:tel,:diagnostic,:age,:sexe)");
			$stmt->bindParam("numero",$nm);
			$stmt->bindParam("nom",$nom);
			$stmt->bindParam("adresse",$adr);
			$stmt->bindParam("tel",$tel);
            $stmt->bindParam("diagnostic",$dg);
			$stmt->bindParam("age",$age);
			$stmt->bindParam("sexe",$sexe);
          
			
			$stmt->execute();
			$idp=$db->lastInsertId();
			$stmt1 = $db->prepare("insert into soigner(numero_docteur,numero_malade) values(:numero_docteur,:numero_malade)");
			$stmt1->bindParam("numero_docteur",$id);
			$stmt1->bindParam("numero_malade",$idp);
			$stmt1->execute();
			
			$stm = $db->prepare("select max(numlit) as maxi from hospitaliser where id_salle like $salle");
			$stm->execute();
			$row=$stm->fetch();

			if($row['maxi']==NULL){
				$numl=1;

			}
			else{
				$numl=$row['maxi']+1;

			}
			
			
			
			
			$stms = $db->prepare("insert into hospitaliser(id_salle,numlit,num_malade) values(:id_salle,:numlit,:num_malade)");
			
			$stms->bindParam("id_salle",$salle);

			$stms->bindParam("numlit",$numl);
			$stms->bindParam("num_malade",$idp);
		
			$stms->execute();
		
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

	public function editPatient($idp,$nom,$nm,$adr,$tel,$sexe,$salle,$dg,$age,$id)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("update malade set numero=:numero,nom=:nom,adresse = :adresse, tel = :tel,diagnostic=:diagnostic,sexe=:sexe,age=:age  where id = :id");
			$stmt->bindParam("id",$idp);
			$stmt->bindParam("adresse",$adr);
			$stmt->bindParam("nom",$nom);
			$stmt->bindParam("numero",$nm);
			$stmt->bindParam("sexe",$sexe);
			$stmt->bindParam("tel",$tel);
			$stmt->bindParam("age",$age);
			
			$stmt->bindParam("diagnostic",$dg);
            
			$stmt->execute();
			$stm = $db->prepare("update hospitaliser set id_salle=:id_salle  where num_malade = :num_malade");
			$stm->bindParam("num_malade",$idp);
			$stm->bindParam("id_salle",$salle);
			$stm->execute();
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


	public function deletePatient($id)
	{
		$db = $this->dblocal;
		try
		{
            
        
			$stmt = $db->prepare("delete from malade where id= :id");
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

	public function urgencePatient($id,$idp,$ids)
	{
		$db = $this->dblocal;
		try
		{
			$stmt = $db->prepare("insert into urgence(id_docteur,id_malade,id_service) values (:id_docteur,:id_malade,:id_service)");
			$stmt->bindParam("id_docteur",$id);
			$stmt->bindParam("id_malade",$idp);
			$stmt->bindParam("id_service",$ids);
			
		
			
			$stmt->execute();


			$stm = $db->prepare("select directeur from service where ids like $ids");
			$stm->execute();
			$row=$stm->fetch();

			$stmt1 = $db->prepare("update soigner set numero_docteur=:numero_docteur  where numero_malade = :numero_malade");
			
			$stmt1->bindParam("numero_malade",$idp);
			$stmt1->bindParam("numero_docteur",$row['directeur']);
		
			$stmt1->execute();
			
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





	
    
    
   
}