<?php
include "dbcon.php";
function getprofile(){
  
  $i = $_POST['i'];
  
  $sql = "SELECT * FROM offenders WHERE id='$i' ;";
  
  $send = db()->query($sql);
  
  if($result = $send->fetch_assoc()){

echo'
<div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="includes/uploads/'.$result['picture'].'" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">'.$result['firstname'].' '.$result['lastname'].'</h4>
                                    <h6 class="card-subtitle">'.$result['email'].'</h6>
                                   
                                </center>
                            </div>
                            <div>
                                <hr> 
                          </div>
                            <div class="card-body"> 
                              <small class="text-muted">car type</small>
                                <h6>'.$result['car'].'</h6> 
                              <hr>
                              <small class="text-muted p-t-30 db">state</small>
                                <h6>'.$result['state'].'</h6> 
                              <hr>
                              <small class="text-muted p-t-30 db">location</small>
                                <h6>'.$result['location'].'</h6>
                              <hr>
                              <small class="text-muted">phone no</small>
                                <h6>'.$result['phoneno'].'</h6>
                              <hr>
                              <small class="text-muted p-t-30 db">city</small>
                                <h6>'.$result['city'].'</h6> 
                              <hr>
                              <small class="text-muted p-t-30 db">Address</small>
                                <h6>'.$result['address'].'</h6>
                              <hr>
                               <small class="text-muted">date</small>
                                <h6>'.$result['dates'].'</h6>
                              <hr>
                              <small class="text-muted p-t-30 db">offence type</small>
                                <h6>'.$result['offence'].'</h6> 
                              <hr>
                              <small class="text-muted p-t-30 db">offence price</small>
                                <h6>'.$result['penalty'].'</h6>
                              <hr>
                              <small class="text-muted p-t-30 db">officer in charge</small>
                                <h6>'.$result['officer'].'</h6>
                              
                              <hr>
                               
                                 <div class="form-group">
                                       <div class="col-sm-12">
                                       <button class="btn btn-success" type="button" id="receipt" value="'.$i.'">Generate Ticket</button>
                                   </div>
                                   <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
                                  <script>
                                  
                                      
const params = new URLSearchParams(window.location.search);  
const pageid = params.get("id");  
                                      $("#receipt").click(function(){
     location.assign("ticket.html?pageid="+pageid);
      
    })
                                  </script>
                               </div>
                              
                            </div>
                        </div>';
    
	}
} 
getprofile();



?>