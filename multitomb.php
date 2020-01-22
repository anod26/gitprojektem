<?php
//Így kell kilistázni egy több dimenziós tömböt:(magamtól)
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

  foreach($cars as $key => $car){
 //var_dump($car);
 echo "
 <ul>
 <li>{$car[0]}</li>
 <li>{$car[1]}</li>
 <li>{$car[2]}</li>
 </ul>

 ";
 
 
  	
  }

?>