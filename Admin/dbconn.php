<?php
class dbconn
{
	public $dblocal;
	public function __construct()
	{
	}
	public function initDBO()
	{
		$user = 'root';
		//Changer Le mot de passe ver ' ' si Vous Utilise XAMP
		$pwd = '';
		$dbname = 'ProjetM1S2';
		try {
			$this->dblocal = new PDO("mysql:host=localhost;dbname=" . $dbname . ";charset=latin1", $user, $pwd, array(PDO::ATTR_PERSISTENT => true));
			$this->dblocal->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die("Can't connect database");
		}
	}
}