<?php
class connection{

	private $servername = "shareddb-q.hosting.stackcp.net";
  	private $username = "princess-31313727a7";
  	private $password = "adaezep1";
  	private $dbname = "princess-31313727a7";
  
  public function connect(){
  
  
  
  $mycon =  mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
  
  if($mycon){
  
  return $mycon;
  
  }
  
  }
  
  
  }









?>