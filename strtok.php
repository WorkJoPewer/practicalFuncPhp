<?php
    $string = "������\t�����\n���    �������";
    $tok = strtok($string, "\t\n");
    while($tok){
		echo "Word = $tok <br/>";
		$tok = strtok(" \t\n");
	}
?>   