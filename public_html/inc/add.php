<?php
include "pcon.php";

class addoffence extends connection{

	private $name;
  	private $offence;
  	private $penalty;
  	private $licence;
  	private $location;
  	private $phoneno;
  	private $description;
  	private $car;
  	private $dates;
  	private $plateno;
  	private $city;
  	private $state;
  	private $address;
  	private $email;
  	private $officier;
  	
  
  public function add($na,$of,$pe,$li,$lo,$ph,$de,$ca,$da,$pl,$ci,$st,$ad,$em,$fi){
  
 	$this->name = $na;
    $this->offence = $of;
    $this->penalty = $pe;
    $this->licence = $li;
    $this->location = $lo;
    $this->phoneno = $ph;
    $this->description = $de;
    $this->car = $ca;
    $this->dates = $da;
    $this->plateno = $pl;
    $this->city = $ci;
    $this->state = $st;
    $this->address = $ad;
    $this->email = $em;
    $this->officier = $fi;
 
    
    $sql = "INSERT INTO offence(name,offence,penalty,licence,location,phoneno,description,car,dates,plateno,city,state,address,email,officier)VALUES('$this->name','$this->offence',
    '$this->penalty','$this->licence','$this->location','$this->phoneno','$this->description','$this->car','$this->dates','$this->plateno','$this->city','$this->state',
    '$this->address','$this->email','$this->officier');";
    
    $send = $this->connect()->query($sql);
    
    if($send){
       echo' <script>location.assign("../addoffence.php"); </script>';
    
   /* echo "record updated successfully";*/
    
    
    }else{
    
    echo "record not updated";
    }

  }

}

$nam = $_POST["name"];
$ofe = $_POST["offence"];
$pen = $_POST["penalty"];
$lic = $_POST["licence"];
$loc = $_POST["location"];
$pho = $_POST["phoneno"];
$des = $_POST["summary"];
$car = $_POST["car"];
$dat = date("d-m-y");
$pla = $_POST["plateno"];
$cit = $_POST["city"];
$sta = $_POST["state"];
$add = $_POST["address"];
$ema = $_POST["email"];
$ofi = $_POST["officier"];

$ofen = new addoffence();
$ofen->add($nam,$ofe,$pen,$lic,$loc,$pho,$des,$car,$dat,$pla,$cit,$sta,$add,$ema,$ofi);



?>