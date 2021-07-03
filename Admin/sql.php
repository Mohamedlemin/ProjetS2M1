<?php
class sql extends dbconn
{
	public function __construct()
	{
		$this->initDBO();
	}

	//debut service service
	public function list_service()
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("select code,ids,id,nom,batiment,nomDoc from docteur,service where service.directeur=docteur.id");
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "List customer";
			$stat[2] = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			$stat[2] = [];
			return $stat;
		}
	}
	public function new_service($code, $nm, $bt, $dr)
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("insert into service(code,directeur,nom,batiment) values (:code,:directeur,:nom,:batiment)");
			$stmt->bindParam("code", $code);
			$stmt->bindParam("directeur", $dr);
			$stmt->bindParam("nom", $nm);
			$stmt->bindParam("batiment", $bt);


			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success save customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function editService($id, $code, $nm, $bt, $dr)
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("update service set code=:code,nom = :nom, directeur = :directeur, batiment = :batiment  where ids = :ids");
			$stmt->bindParam("ids", $id);
			$stmt->bindParam("code", $code);
			$stmt->bindParam("nom", $nm);
			$stmt->bindParam("directeur", $dr);
			$stmt->bindParam("batiment", $bt);

			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success edit customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function deleteService($id)
	{
		$db = $this->dblocal;
		try {


			$stmt = $db->prepare("delete from service where ids= :ids");
			$stmt->bindParam("ids", $id);
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success delete customer";
			return $stat;
		} catch (PDOException $ex) {
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
    

	//-----------------Docteur-----------------
	//Liste docteur
	public function list_Docteur()
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("SELECT * FROM  docteur;");
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "List customer";
			$stat[2] = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			$stat[2] = [];
			return $stat;
		}
	}
	public function new_Docteur($nomDoc, $Numero, $adresse, $tel, $speciealite, $username, $password)
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("insert into docteur(nomDoc,Numero,adresse,tel,speciealite,username,password) values (:nomDoc,:Numero,:adresse,:tel,:speciealite,:username,:password)");
			$stmt->bindParam("nomDoc", $nomDoc);
			$stmt->bindParam("Numero", $Numero);
			$stmt->bindParam("adresse", $adresse);
			$stmt->bindParam("tel", $tel);
			$stmt->bindParam("speciealite", $speciealite);
			$stmt->bindParam("username", $username);
			$stmt->bindParam("password", $password);



			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success save customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function editDocteur($id, $nomDoc, $Numero, $adresse, $tel, $speciealite, $username, $password)
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("UPDATE `docteur` SET  nomDoc=:nomDoc ,Numero = :Numero, adresse = :adresse, tel = :tel, 
			speciealite = :speciealite, username= :username ,password= :password where `docteur`.`id` = :id");
			$stmt->bindParam("id", $id);
			$stmt->bindParam("nomDoc", $nomDoc);
			$stmt->bindParam("Numero", $Numero);
			$stmt->bindParam("adresse", $adresse);
			$stmt->bindParam("tel", $tel);
			$stmt->bindParam("speciealite", $speciealite);
			$stmt->bindParam("username", $username);
			$stmt->bindParam("password", $password);

			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success edit customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function deleteDocteur($id)
	{
		$db = $this->dblocal;
		try {


			$stmt = $db->prepare("delete from Docteur where id= :ids");
			$stmt->bindParam("ids", $id);
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success delete customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}


	//-----------------Infirmière -----------------
	//Liste Infirmière 
	public function list_Inf()
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("SELECT * FROM infirmier;");
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "List customer";
			$stat[2] = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			$stat[2] = [];
			return $stat;
		}
	}
	public function new_Inf($nom, $prenom, $adresse, $tel, $rotation, $salaire, $code)
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("insert into infirmier(nom,prenom,adresse,tel,rotation,salaire,code) values (:nom,:prenom,:adresse,:tel,:rotation,:salaire,:code)");
			$stmt->bindParam("nom", $nom);
			$stmt->bindParam("prenom", $prenom);
			$stmt->bindParam("adresse", $adresse);
			$stmt->bindParam("tel", $tel);
			$stmt->bindParam("rotation", $rotation);
			$stmt->bindParam("salaire", $salaire);
			$stmt->bindParam("code", $code);



			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success save customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function editInf($id, $nom, $prenom, $adresse, $tel, $rotation, $salaire, $code)
	{
		$db = $this->dblocal;
		try {
			$stmt = $db->prepare("UPDATE `infirmier` SET  nom=:nom ,prenom = :prenom, adresse = :adresse, tel = :tel, 
			rotation = :rotation, salaire= :salaire ,code= :code where `infirmier`.`id` = :id");
			$stmt->bindParam("id", $id);
			$stmt->bindParam("nom", $nom);
			$stmt->bindParam("prenom", $prenom);
			$stmt->bindParam("adresse", $adresse);
			$stmt->bindParam("tel", $tel);
			$stmt->bindParam("rotation", $rotation);
			$stmt->bindParam("salaire", $salaire);
			$stmt->bindParam("code", $code);

			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success edit customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
	public function deleteInf($id)
	{
		$db = $this->dblocal;
		try {


			$stmt = $db->prepare("delete from infirmier where id= :ids");
			$stmt->bindParam("ids", $id);
			$stmt->execute();
			$stat[0] = true;
			$stat[1] = "Success delete customer";
			return $stat;
		} catch (PDOException $ex) {
			$stat[0] = false;
			$stat[1] = $ex->getMessage();
			return $stat;
		}
	}
}