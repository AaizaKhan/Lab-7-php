<?php
$arr = array(1 , 3 , 5 , 7 , 9);
    
	  $insert  =array("@");
	  $insert1 =array("#");
	  array_splice($arr , 3 , 0 , $insert);
	  array_splice($arr , 5 , 0 , $insert1);
     foreach($arr as $x=>$b ) {
      echo $arr[$x];
   }
   $remove = array_shift($arr);
   echo "<br>";
 foreach($arr as $x=>$b ) {
      echo $arr[$x];
	  
   }

?>