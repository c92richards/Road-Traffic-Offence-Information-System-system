<?php
include "pcon.php";

class login extends connection{
	
  private $username;
  private $passwords;
  
  public function logme($us,$pa){
  $this->username = $us;
   $this->passwords = $pa;
    
    $sql = "SELECT * FROM register WHERE username = '$this->username' AND passwords = '$this->passwords';";
    
      $send = $this->connect()->query($sql);
    
      
      if($result = $send->fetch_assoc()){
       echo' <script>location.assign("../dashboard.php"); </script>';
       
        
        
      }
    else{
      
      echo "logged in not successful";
      }
  
  
  }



}


$user = $_POST["username"];
$pass = $_POST["password"];

$ada = new login();
$ada->logme($user,$pass);

?>