<?php
$var=99;
$val=str_split($var);
$arr= array_sum($val);
$roll_no=169;

if($arr==$roll_no):
	echo("It's your lucky day today");

else:
	echo($arr);

endif;		
?>