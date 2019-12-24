<?php
include "pcon.php";

class register extends connection{
  
   private $fullname;
   private $username;
   private $email;
   private $passwords;
   
   public function enterreg($fn,$un,$em,$ps){
 	 $this->fullname = $fn;
     $this->username = $un;
     $this->email =$em;
     $this->passwords = $ps;

     $sql = "INSERT INTO register(fullname,username,email,passwords)VALUES('$this->fullname','$this->username','$this->email','$this->passwords');";     
     
		$send = $this->connect()->query($sql);
     
     	if($send){
       
     	 echo "i've been registered"; 
     	}
     
     	else{
     
     	echo "have not been registered";
     }  
   } 
}

$fname = $_POST["fullname"];
$uname = $_POST["users"];
$ema = $_POST["email"];
$pass = $_POST["pass"];


$preg = new register();
$preg->enterreg($fname,$uname,$ema,$pass);

?>