<?php
$arr=[10,5,7,3];
usort($arr,function ($x,$y)
{
    return $x>$y;
});
foreach($arr as $x)
{
    echo "<br".$x;
}
?>