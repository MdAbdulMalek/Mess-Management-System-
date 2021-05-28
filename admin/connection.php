<?php
class Database{
    public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="mess_database";
	public $data;
	public $link;

public function __construct()
	{
		$this->connectDB();
	}
	
	private function connectDB()
	{
		
		$this->link=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->link->connect_errno)
		{
			die ("database connection failed".$this->link->connect_errno);
		}
		
		
	}
	
	
	public function select($query){
		$result= $this->link->query($query) or die ($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		}
		
		else {
			
			return false;
		}
		
		
	}
	
	public function insert($query){
		$insert= $this->link->query($query) or die ($this->link->error.__LINE__);
		if($insert){
			
			header("Location: home.php?msg=".urlencode('Data Inserted Successfully.'));
			exit();
			
		}else{
			die("Error: (".$this->link->errno.")".$this->link->error);
		}
		
		}
		
	 
	 
		public function signin_admin($username,$password)
	 {
		$query=$this->link->query("select username,Password from admin where username='$username' and password='$password'");
	    $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['username']=$username;
			return true;
		}
		else
		{
			return false;
		}
	 
	 }
	

public function url($url)
	{
		header("location:".$url);
	}

	
}
?>