<?php
function view(){
    
     $sql = "SELECT * FROM offencetable ;";
      
      $send = db()->query($sql);
      while($result = $send->fetch_assoc()){
        echo'
        
         <option  value="'.$result['id'].'">'.$result['offencetype'].'</option>
        
        
        ';
        
        
      }
    
    }





?>