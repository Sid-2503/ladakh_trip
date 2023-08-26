<?php
     $str = "This is string ";
     echo $str;
     // length of string
     // . is used to concatinate in string .. it is string concatenation operator
     $str_len = strlen($str);
     echo "the length of the string is ".$str_len. "Thanks";
     echo $str_len;

     // str_word_count($str) is used to calculate the number of words 
     echo "<br> The number of words ins string are : ". str_word_count($str);


      // strrev($str) is used to reverse the string
      echo "<br> The reverse of string is : " .strrev($str);


        // strpos($str) is used to search  the word in the string
        echo "<br> The search for word in string is : " .strpos($str, "is");

       // str_replace($str) is used to search  the word in the string
       echo "<br> The replace for word in string is : " .str_replace("is","at", $str);  





?>