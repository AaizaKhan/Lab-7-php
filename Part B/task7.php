<?php
$number = range(1 , 200);
$arr = array();
foreach($number as $x=>$b ) {
echo $number[$x]."<br>";
Array_push($arr, $number[$x]);
 }
 $arr1 = array_search(9 , $arr);
 echo "Yes found the rollno on the index ".$arr1;
?>