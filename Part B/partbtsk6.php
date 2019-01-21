<?php

//ascending order sort by value
 $arr = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");
 asort($arr);
 echo "ascending order sort by value <br>";

	foreach($arr as $x => $x_value) {
		
	    echo "Key=" . $x . ", Value=" . $x_value;
	    echo "<br>";
	}

echo "<br>";

//ascending order sort by Key
$arr1 = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");
ksort($arr1);
echo "ascending order sort by Key <br>";

	foreach($arr1 as $x => $x_value) {
		
	    echo "Key=" . $x . ", Value=" . $x_value;
	    echo "<br>";
	}
echo "<br>";

//descending order sorting by Value
 $arr2 = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");
 arsort($arr2);
 echo "descending order sorting by Value <br>";

	foreach($arr2 as $x => $x_value) {
		
	    echo "Key=" . $x . ", Value=" . $x_value;
	    echo "<br>";
	}
echo "<br>";

//descending order sorting by Key
$arr3 = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");
krsort($arr3);
echo "descending order sorting by Key <br>";

	foreach($arr3 as $x => $x_value) {
		
	    echo "Key=" . $x . ", Value=" . $x_value;
	    echo "<br>";
	}
?>