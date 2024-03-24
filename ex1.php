<?php
echo "<hr><b>Use of Logical Operators</b><hr>";
$x=12;
$y=2;
$z=true;
echo "x=".$x;
echo "<br>y=".$y;
echo "<br>z=".$z;

if($x>0 && $y>0)
{
 echo "<br>Both conditions are true !!";
}
else
{
 echo "<br>Both conditions are not true !!";
}

if($x>0 || $y>0)
{
 echo "<br>One condition is true !!";
}
else
{
 echo "<br>Both are conditions are false !!";
}

if($x>0 xor $y<0)
{
 echo "<br>Only one condition is false or true !!";
}
else
{
 echo "<br>Both are conditions are true !!";
}

if(!$z)
{
 echo "<br>True";
}
else
{
 echo "<br>False";
}
?>