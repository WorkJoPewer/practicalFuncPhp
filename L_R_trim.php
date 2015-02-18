<?php
    $str= "PPPpos4itati coli4estvo symbolovvv";
	$ltrim = ltrim($str, 'P');// удаляем символы в начале строки
	$rtrim = rtrim($str, 'v');// удаляем символы в конце строки
	$trim = trim($str, 'P ,v');// удаляем символы в начале и конце строки
	echo "ltrim: $ltrim <br/>";
	echo "rtrim: $rtrim <br/>";
	echo "trim: $trim";
	
?>