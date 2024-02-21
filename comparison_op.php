<?php
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
?>