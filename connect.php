<?php
class connect{
	public $server;
	public $dbname;
	public $usernames;
	public $password;

	public function __construct(){
	 $this->server = "grp6m5lz95d9exiz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	 $this->usernames ="subwb6sap8rdtdvc";
	 $this->password ="jwkiurq7vim8uc6u";
	 $this->dbname ="mdgfmx7yyn978en1";	
	}	
	//1 option:1
	
	public function connectToMySQL():mysqli{
		$conn = new mysqli($this->server,
		$this->usernames,$this->password,$this->dbname);

		if($conn -> connect_error){
			die("Failed". $conn->connect_error);
		}
		else{
			/*echo "Connect!";*/
		}
		return $conn;
	}
	//Option 2: PDO
	public function connectToPDO():PDO{
		try{
		$conn =new PDO("mysql:host=$this->server;dbname=$this->dbname",$this->usernames,$this->password);
		//echo "Connect! PDO";
		}catch(PDOException $e){
			die("Failed".$e);
		}	
		return $conn;
		
	}
	
}
$c = new Connect();
$c-> connectToMySQL();
$c = new Connect();
$c->connectToPDO();

?>
