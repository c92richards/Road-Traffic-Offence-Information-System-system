<?php
	
	function login(){
      
      $emal   = mysqli_real_escape_string(db(),trim($_POST['email']));
	  $pass   = mysqli_real_escape_string(db(),trim($_POST['password']));
      
      $sql = "SELECT * FROM users WHERE email = '$emal' AND password = '$pass' ;";
      
      $getall = db()->query($sql);
      
      if(mysqli_num_rows($getall)>0){
        
      	if($result = $getall->fetch_assoc()){
          
        session_start();
          
          $_SESSION['title'] = $result['title'];
          $_SESSION['firstname'] = $result['firstname'];
          $_SESSION['lastname'] = $result['lastname'];
          $_SESSION['email'] = $result['email'];
     
      
         	$response= array();
            $response['message']="user logged in successfully, redirecting in 5seconds";
        	$response['error'] = false;
            echo json_encode($response);
        

        }
 
      }else{
      
       		$response= array();
            $response['message']="email or password not correct";
        	$response['error'] = true;
            echo json_encode($response);
      
      
      }
      

    }


?>