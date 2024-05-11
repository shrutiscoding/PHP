<?php
 $str="This is PHP 5th practical of String Functions";
 $str1="Hello,this is Php 5th Practical of string function";
 echo "<b>String 1 </b>:".$str;
 echo "<br><b>String 2 </b>:".$str1;
 
 $len=strlen($str);
 $word=str_word_count($str);
 $rev=strrev($str);
 $pos=strpos($str,"PHP");
 $replace=str_replace("PHP","PHP's",$str);
 $first=ucwords($str);
 $upper=strtoupper($str);
 $lower=strtolower($str);
 $compare=strcmp($str,$str1);
 
 echo "<br><br><br><b>Length:</b>".$len;
 echo "<br><b>Words:</b>".$word;
 echo "<br><b>Reverse:</b>".$rev;
 echo "<br><b>Position of PHP:</b>".$pos;
 echo "<br><b>Replace of PHP:</b>".$replace;
 echo "<br><b>First Character to Upper:</b>".$first;
 echo "<br><b>String to Uppercase:</b>".$upper;
 echo "<br><b>String to Lowercase:</b>".$lower;
 echo "<br><b>Compared to str1:</b>".$compare;
?>
