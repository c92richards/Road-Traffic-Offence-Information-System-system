<?php
include "dbcon.php";
  $theid= $_POST['theid'];

function getoffenders($i){

  $sql = "SELECT * FROM offenders WHERE id='$i' ;";
  
  $send = db()->query($sql);

  if($result = $send->fetch_assoc()){
  $response= array();
    $response= $result;
     echo json_encode($response);
	}
  
 
} 
getoffenders($theid);

  ?>