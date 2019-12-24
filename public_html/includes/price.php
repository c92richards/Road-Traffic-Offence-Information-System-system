<?php
function getprice(){

$i = $_POST['id'];
  
  $sql = "SELECT * FROM offencetable WHERE id='$i' ;";
  
  $send = db()->query($sql);
  
  if($result = $send->fetch_assoc()){
  
  echo $result['offenceprice'];
  
  
  
  }









}
?>