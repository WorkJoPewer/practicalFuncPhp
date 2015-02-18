<?php
    $str = "любой текст";
	$sub_1 = mb_substr($str, 2, 3, 'utf-8');
	$sub_2 = mb_substr($str, 1, -3, 'utf-8');
	echo $sub_1 . "<br/>";
	echo $sub_2;
?>