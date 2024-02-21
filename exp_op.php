<?php

$x=10;
$y=5;

echo "x=".$x;
echo "<br>y=".$y;

echo "<hr><b>Use of Arithmetic Operators</b><hr>";
echo "<br>Addition of x and y=".$x+$y;
echo "<br>Subtraction of x and y=".$x-$y;
echo "<br>Multiplication of x and y=".$x*$y;
echo "<br>Division of x and y=".$x/$y;
echo "<br>Remainder of x and y=".$x%$y;
echo "<br>Exponentiation of x and y=".$x**$y;

echo "<hr><b>Use of Assignment Operators</b><hr>";
echo "<br>Addition of x and y=".$x+=$y;
echo "<br>Subtraction of x and y=".$x-=$y;
echo "<br>Multiplication of x and y=".$x*=$y;
echo "<br>Division of x and y=".$x/=$y;
echo "<br>Remainder of x and y=".$x%=$y;

echo "<hr><b>Use of Increment and Decrement Operators</b><hr>";
$y=6;
echo "<br>y=".$y;
echo "<br>Pre-Increment of y=".++$y;
echo "<br>Post-Increment of y=".$y++;
$y=6;
echo "<br>y=".$y;
echo "<br>Pre-Decrement of y=".--$y;
echo "<br>Post-Decrement of y=".$y--;

echo "<hr><b>Use of Comparison Operators</b><hr>";
$x=10;
$y=5;

echo "x=".$x;
echo "<br>y=".$y;
echo "<br>x is equal to y=".($x==$y);
echo "<br>x is identical equal to y - ".($x===$y);
echo "<br>x is not equal to y(!=) - ".($x!=$y);
echo "<br>x is not equal to y(<>) - ".($x<>$y);
echo "<br>x is not identical equal to y(!==) - ".($x!==$y);
echo "<br>x is greater than y - ".($x>$y);
echo "<br>x is less than y - ".($x<$y);
echo "<br>x is greater than or equal to y - ".($x>=$y);
echo "<br>x is less than or equal to y - ".($x<=$y);
echo "<br>Spaceship of x and y - ".($x<=>$y);


echo "<hr><b>Use of Logical Operators</b><hr>";
$x=true;
$y=false;
echo "x=".$x;
echo "<br>y=".$y;
echo "<br>use of and Operator=".($x and $y);
echo "<br>use of or Operator=".($x or $y);
echo "<br>use of xor Operator=".($x xor $y);
echo "<br>use of && Operator=".($x && $y);
echo "<br>use of || Operator=".($x || $y);
echo "<br>use of ! Operator of y=".(!$y);

echo "<hr><b>Use of String Operators</b><hr>";
$x="Hello";
$y="PHP";
echo "x=".$x;
echo "<br>y=".$y;
echo "<br>Concatenation =".($x.$y);
echo "<br>Concatenation Assignment=".($x.=$y);
echo "<br>Now x=".$x;

echo "<hr><b>Use of Array Operators</b><hr>";
$x=array(1,2,3,4,5);
$y=array(1,5,4,7,9);
echo "<br>x=[1,2,3,4,5]";
echo "<br>y=[1,5,4,7,9]";
echo "<br> Union of x and y=".($x==$y);
//echo "<br> Union of x and y=".($x+$y);

echo "<hr><b>Use of Conditional Assignment Operators</b><hr>";
$a=10;
$b=2;
$c=3;
$e1=$a>$b;
$e2=$a>$c;
$e3=$b>$c;
$x=$e1?$e2:$e3;
echo "".$x; 
?>