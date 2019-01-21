<?php
$var = "Aaiza";
$name = str_split($var);
foreach( $name as $val){
  if($val == "A")
  	echo"Apple ";
  
  elseif($val == "a")
     echo"Axe ";
  
  elseif($val == "i")
  	echo "Igloo ";
  
  elseif($val == "z")
  	echo "Zebra ";
}
?>