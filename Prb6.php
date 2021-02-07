<?php

     $a =array('1','2','3','4','5');
	 
	 foreach($a as $x)
	 {
		 echo "$x";
	 }
	 
	 echo "<br>";
	 
	 $y = '$';
	 array_splice($a,3,0,$y);
	 foreach($a as $x)
	 {
		 echo "$x";
	 }


?>