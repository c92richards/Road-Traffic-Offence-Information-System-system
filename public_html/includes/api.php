<?php

	include "dbcon.php";
	include "register.php";
	include "login.php";
	include "addoffence.php";
	include "viewoffence.php";
	include "addoffenders.php";
	include "view.php";
	include "price.php";
	/*include "viewoffenders.php";*/
	
	$action = $_POST['action'];

	



   
	
	if($action==='register'){
    register();
   
    }
else if($action==='login'){
      
    login();
      
    }
else if($action==='offence'){
      
      offence();
   }
else if($action==='viewoffence'){
      
      viewoffence();
   }
else if($action==='deleteit'){
      
     delete();
      
   }
else if($action==='offenders'){
    
    offenders();
    
    }
else if($action==='view'){
    
    view();
    
    }
else if($action==='getprice'){
    
    getprice();
      
    }
/*else if($action==='getoffenders'){
    	getoffenders();
    }*/
?>
