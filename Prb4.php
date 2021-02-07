<?php
	$i = array(1, 2, 3, 4, 5);  
	unset($i[3]);
	$i = array_values($i);
	print_r($i);   
?>