<?php
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
      
      echo ' 
      
      <script>
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
	
?>