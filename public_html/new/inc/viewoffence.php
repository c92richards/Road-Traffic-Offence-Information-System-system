<?php
include "pcon.php";

class view extends connection{

  public function viewoffence(){
  
  
  $sql = "SELECT * FROM offence ;";
    $send=$this->connect()->query($sql);
    while($result= $send->fetch_assoc()){
      
      echo'
      				<!-- Application #1 -->
			<div class="application">
				<div class="app-content">
					
					<!-- Name / Avatar -->
					<div class="info">
						
						<span>'.$result['name'].'</span>
						<ul>
							<li><a href="#"><i class="fa fa-file-text"></i>'.$result['offence'].'</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i>'.$result['phoneno'].'</a></li>
						</ul>
					</div>
					
					<!-- Buttons -->
					<div class="buttons">
						<a href="#three-1" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
					</div>
					<div class="clearfix"></div>

				</div>

				<!--  Hidden Tabs -->
				<div class="app-tabs">

					<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>
					
					<!-- First Tab -->
				    <div class="app-tab-content" id="one-1">
						<div class="clearfix"></div>
					</div>
	
				    <!-- Third Tab -->
				    <div class="app-tab-content"  id="three-1">
						<i>Full Name:</i>
						<span>'.$result['name'].'</span>

						<i>Email:</i>
						<span>'.$result['email'].'</span>

						<i>Offence Description</i>
						<span>P'.$result['description'].'</span>
                      
                      	<i>Penalty:</i>
						<span>'.$result['abstract'].'</span>
                      
                        <i>Driver Licence:</i>
						<span>'.$result['licence'].'</span>
                      
                      <i>Location:</i>
						<span>'.$result['location'].'</span>
                      
                      <i>Car Model:</i>
						<span>'.$result['car'].'</span>
                      
                      <i>Plate No:</i>
						<span>'.$result['plateno'].'</span>
                      
                      <i>City:</i>
						<span>'.$result['city'].'</span>
                      
                      <i>State:</i>
						<span>'.$result['state'].'</span>
                      
                      <i>Address:</i>
						<span>'.$result['address'].'</span>

				    </div>

				</div>

				<!-- Footer -->
				<div class="app-footer">
                  
					<ul>
						<li><i class="fa fa-file-text-o"></i>'.$result['officier'].'</li>
						<li><i class="fa fa-calendar"></i>'.$result['dates'].'</li>
					</ul>
					<div class="clearfix"></div>

				</div>
			</div>
      ';
  
  
    }
  }
}






?>