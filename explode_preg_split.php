<?php
   $string = "stroka, razdelennata, zapiatoi";
   $array_words_1 = explode(',', $string);
   var_dump($array_words_1);
   $string = "������1�����������2�������3��� �����";
   // '/\d/' � �������� ����������� ����������
   $array_words_2 = preg_split('/\d/', $string);
   var_dump ($array_words_1); 
?>  