<?php
function calculator($val1,$val2,$op)
{
switch($op)
{
case "+": echo $val1+$val2;
break;

case"-": echo  $val1-$val2;
break;

case"*": echo $val1*$val2;
break;
}
}
echo calculator(14,2,"+");
?>
