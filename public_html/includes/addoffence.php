<?php
function offence(){
    
      	$offence = mysqli_real_escape_string(db(),trim($_POST['off']));
		$price = mysqli_real_escape_string(db(),trim($_POST['pro']));
	
      
      
      $sql = "SELECT * FROM offencetable WHERE offencetype = '$offence';";
      $check = db()->query($sql);
      
      if(mysqli_num_rows($check)>0){
      
      	echo"offence type already exists thank you";
      
      
      }else{
      

      $offencedb = "INSERT INTO offencetable(offencetype,offenceprice) VALUES('$offence','$price');";
      
      $send = db()->query($offencedb);
      
      if($send){
      
      echo "offence added successfully";
      
      }else{
      
      echo"offence not registered";
      
      }
	
   
      
    }
    
  


    }










?>