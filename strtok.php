<?php
    $string = "Просто\tтекст\nдля    примера";
    $tok = strtok($string, "\t\n");
    while($tok){
		echo "Word = $tok <br/>";
		$tok = strtok(" \t\n");
	}
?>   