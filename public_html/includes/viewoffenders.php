<?php
include "dbcon.php";
function getoffenders(){
  
  $sql = "SELECT * FROM offenders ;";
  
  $send = db()->query($sql);
  
  while($result = $send->fetch_assoc()){

echo'
<tr>
     <td>
       <p>'.$result['id'].'</p>
     </td>
     
     <td style="width:50px;">
     <span class="round"><img src="includes/uploads/'.$result['picture'].'" alt="user" width="50"></span>
     </td>
     
      <td>
         <p>'.$result['firstname'].'</p>
      </td>
      
       <td>
         <p>'.$result['lastname'].'</p>
      </td>
      
     <td>
       <p>'.$result['email'].'</p>
   	</td>
   
    <td>
     <p>'.$result['offence'].'</p>
    </td>
    
    <td>
   		<p>'.$result['penalty'].'</p>
    </td>
    
 	<td>
    <form action="../profile.html" method="GET">
    <button class="label label-success label-rounded" type="submit" name="id" value="'.$result['id'].'" >view</button>
    </form>
	</td>

                                              
</tr>';
    
	}
} 
getoffenders();

  ?>