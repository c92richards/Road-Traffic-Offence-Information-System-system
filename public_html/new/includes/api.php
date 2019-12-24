<?php

	include "dbcon.php";
	include "register.php";
	include "login.php";
	include "addoffence.php";
	
	$action = $_POST['action'];

	function viewoffence(){
    
    $sql = "SELECT * FROM offencetable ;";
      
      $send = db()->query($sql);
      while($result = $send->fetch_assoc()){
      
      
      echo'
      
                                       
                                            <tr>
                                                <td>'.$result[id].'</td>
                                                <td>'.$result[offencetype].'</td>
                                                <td>'.$result[offenceprice].'</td>
                                                
                                                <td><span class="label label-danger" id="'.$result[id].'"  onclick="deletejav(this)">Delete</span> </td>
                                            </tr>
    
                                 
                                
                              
                                
      						';

     		 			}
      
      echo '  <script>
                                function deletejav(n){
                                var theid=n.id;
                                
                                $.post("includes/api.php",
                                {
                                action:"deleteit",
                                id:theid
                                
                                },
                                function(data){
                       
                        getData();
                                
                                }
                                
                                )
                                
                                
                                }
                                
                                </script>';

    				}


		function delete(){
          	$id = $_POST['id'];
        
        	$delete = "DELETE FROM offencetable WHERE id='$id' ;";
          
          $del = db()->query($delete);
        
        }
	
	
	
	if($action==='register'){
    register();
   
    }else
      
	if($action==='login'){
    login(); 
    }else
      
    if($action==='offence'){
      
      offence();
   }else
      
    if($action==='viewoffence'){
      
      viewoffence();
   }
else
      
    if($action==='deleteit'){
      
     delete();
   }
?>
