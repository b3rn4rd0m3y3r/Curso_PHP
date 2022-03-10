<?php
	$fileContx = file_get_contents('./Detalhes.csv', true);
	$fileCont = str_replace('"x",',"|",$fileContx);
	echo $fileCont;
	echo "<br><br>";
	$arr = explode('|',$fileCont);
	echo $fileCont;
	echo "<br><br>";
	print_r($arr);
?>