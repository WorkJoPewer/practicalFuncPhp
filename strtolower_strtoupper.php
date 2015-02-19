<?php
    $string = 'stro4ka zao4ka o4ka O4KI';
	    $lower = strtolower($string);
	    $upper = strtoupper($string);
	    $ucfirst = ucfirst($string); // в верхний регистр первого символа строки
	    $ucwords = ucwords($string);// первых символ каждого слова в верхний регистр
	$str = 'строчка заочка очка очки';
	    $mb_lower = mb_strtolower($str, "utf-8");
	    $mb_upper = mb_strtoupper($str, "utf-8");
	    $con_upper = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");// перевод всех символов в верхний регистр
	//MB_CASE_LOWER, MB_CASE_TITLE
	    $first_char = mb_substr($str, 0, 1, 'utf-8');
		$first_upper = mb_convert_case($first_char, mb_strlen($str),'utf-8');
		$all_char = mb_substr($str, 1, mb_strlen($str), 'utf-8');
		$result = "$first_upper  .$all_char";
		
	echo "<b>strltoower:</b> $lower <br/>";
	echo "<b>strtoupper:</b> $upper <br/>";
	echo "<b>ucfirst:</b> $ucfirst <br/>";
	echo "<b>ucwords:</b> $ucwords <br/>";
	echo "<b>mb_strtolower:</b> $mb_lower <br/>";
	echo "<b>mb_strtoupper:</b> $mb_upper<br/>";
	echo "<b>mb_convert_case:</b> $con_upper<br/>";
	echo "<b>result: $result</b>";
?>  