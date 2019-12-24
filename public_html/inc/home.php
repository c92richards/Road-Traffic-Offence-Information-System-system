<?php
include "pcon.php";

class get extends connection{


	public function getthem(){

	$sql = "SELECT * FROM offence ;";
  
  $send = $this->connect()->query($sql);
      
      while($result = $send->fetch_assoc()){
      
        echo '
        <a href="#" class="category-small-box">
					<label>name of offender</label><h4>'.$result[name].'</h4>
					<label>offence commited</label><h3>'.$result[offence].'</h3>
				</a>
        
        
        ';
      
      
      
      
      }
	}
}





?>