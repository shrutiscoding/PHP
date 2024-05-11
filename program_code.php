<?php
 $str="Hello I am Shruti";
 $str1="";
 echo "String :".$str;
 $len=strlen($str);
 $count=1;
 echo "<br>Length of String=".$len;
 $str1=trim($str);
 $len=strlen($str1);
 if($str!="")
 {
 for($i=0;$i<$len;$i++)
 {
	 if($str1[$i]==" ")
	 {
		 $count++;
	 }
 }
 echo "<br>No. of words in string:".$count;
 }
 else
 {
	 echo "<br>No. of words in string:0";
 }
?>