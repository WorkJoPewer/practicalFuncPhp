<?php
    $str= "PPPpos4itati coli4estvo symbolovvv";
	$ltrim = ltrim($str, 'P');// ������� ������� � ������ ������
	$rtrim = rtrim($str, 'v');// ������� ������� � ����� ������
	$trim = trim($str, 'P ,v');// ������� ������� � ������ � ����� ������
	echo "ltrim: $ltrim <br/>";
	echo "rtrim: $rtrim <br/>";
	echo "trim: $trim";
	
?>