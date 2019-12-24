<?php

	function db(){
    
    $servername = "shareddb-q.hosting.stackcp.net";
  	$username = "princess-31313727a7";
  	$password = "adaezep1";
  	$dbname = "princess-31313727a7";
      
      $conn = new mysqli($servername,$username,$password,$dbname);
      
      if($conn){
      
      return $conn;
      
      
      }else{
      
      echo" not connected ";
      
      }
    
    
    
    }






?>