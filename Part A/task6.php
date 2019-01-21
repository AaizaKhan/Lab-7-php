<?php
echo "<table border=\"1\" cellpadding=\"15\" cellspacing=\"0\">";
  for ($i=1; $i<8; $i++){
  	echo "<tr>";
  	for($val=1; $val<8; $val++){
  		echo"<td>";
  		echo"".$i*$val;
  		echo"</td>";
  	}
  	echo "</tr>";
  }
echo "</table>";
?>