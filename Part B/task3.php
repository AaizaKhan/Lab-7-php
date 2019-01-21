<?php
$array = range(200, 250);

foreach ($array as $val) {
	if($val%4 == 0)
	{
		echo"$val <br>";
	}
}
?>