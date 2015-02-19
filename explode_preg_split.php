<?php
   $string = "stroka, razdelennata, zapiatoi";
   $array_words_1 = explode(',', $string);
   var_dump($array_words_1);
   $string = "Строка1разделенная2числами3еще текст";
   // '/\d/' – является регулярнымИ Выражением
   $array_words_2 = preg_split('/\d/', $string);
   var_dump ($array_words_1); 
?>  