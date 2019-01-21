<?php

	for($a=2; $a<=10; $a+=2){

		echo $a." ";

	}
	echo"<br>";
	goto odd;

	odd: for($b=1; $b<=9; $b+=2){

		echo $b." ";

	}

?>