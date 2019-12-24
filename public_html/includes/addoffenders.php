<?php
function offenders(){
      
    $first = mysqli_real_escape_string(db(),trim($_POST['first']));
	$last = mysqli_real_escape_string(db(),trim($_POST['last']));
	$car = mysqli_real_escape_string(db(),trim($_POST['car']));
	$state   = mysqli_real_escape_string(db(),trim($_POST['state']));
	$location   = mysqli_real_escape_string(db(),trim($_POST['location']));
  	$mobile = mysqli_real_escape_string(db(),trim($_POST['mobile']));
	$city = mysqli_real_escape_string(db(),trim($_POST['city']));
	$picture = $_FILES['picture'];
	$address   = trim($_POST['address']);
	$email   = trim($_POST['email']);
  	$date = mysqli_real_escape_string(db(),trim(date('y/m/d')));
	$select = mysqli_real_escape_string(db(),trim($_POST['select']));
	$penalty = mysqli_real_escape_string(db(),trim($_POST['penalty']));
	$officer   = mysqli_real_escape_string(db(),trim($_POST['officer']));
     $picturename = $picture['name']; 
      
     
  $sqlgetoff = "SELECT * FROM offencetable WHERE id='$select' ;";
  $getthem = db()->query($sqlgetoff);
  
  $offencetype='';
  if($result= $getthem->fetch_assoc()){
    $offencetype= $result['offencetype'];
  }
  
  $tmpname = $picture['tmp_name'];
  
  move_uploaded_file($tmpname,'uploads/'.$picturename);
  
  
  
  
    $enterdb = "INSERT INTO offenders(firstname,lastname,car,state,location,phoneno,city,picture,address,email,dates,offence,penalty,officer)
      VALUES('$first','$last','$car','$state','$location','$mobile','$city','$picturename','$address','$email','$date',' $offencetype','$penalty','$officer');";
     
      $send = db()->query($enterdb);
      
      if($send){
      
      echo "offender Registered successfully";
        /*echo"<script>
        
        location.assign("../viewoffender.html");
        
        </script>"*/
      
      }else{
      
      echo"Could Not Register Offender";
      
      }

    }
?>