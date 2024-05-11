<?php
$arr=array(
		array("IFTY","Shruti",93.65),
		array("IFSY","Asmita",90.00),
		array("IFFY","Shambhavi",90.66),
		);
$length=count($arr);
for($i=0;$i<$length;$i++)
{
	echo "<b>Array".($i+1)."</b><br>";
for($j=0;$j<$length;$j++)
{
 echo " ".$arr[$i][$j];
}
echo "<br>";
}
?>