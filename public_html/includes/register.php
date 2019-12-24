<?php

	function register(){
      
    $title = mysqli_real_escape_string(db(),trim($_POST['title']));
	$fname = mysqli_real_escape_string(db(),trim($_POST['firstname']));
	$lname = mysqli_real_escape_string(db(),trim($_POST['lastname']));
	$ema   = mysqli_real_escape_string(db(),trim($_POST['email']));
	$pas   = mysqli_real_escape_string(db(),trim($_POST['password']));
      
      
      $sql = "SELECT * FROM users WHERE email = '$ema';";
      $check = db()->query($sql);
      
      if(mysqli_num_rows($check)>0){
      
      	echo"user with email already exists";
      
      
      }else{
      
      
      
      
      
      
      $enterdb = "INSERT INTO users(title,firstname,lastname,email,password) VALUES('$title','$fname','$lname','$ema','$pas');";
      
      $send = db()->query($enterdb);
      
      if($send){
      
      echo "user registered successfully";
      
      }else{
      
      echo"user not registered";
      
      }
	
   
      
    
    
    }

    }




?>