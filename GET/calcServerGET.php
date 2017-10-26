<?php
$aNum = $_GET['num1'];
$bNum = $_GET['num2'];
$oP = $_GET['opr'];

 calc($aNum, $bNum, $oP);

function calc($aNum, $bNum, $oP)
{
	switch ($oP) {
    case "plus":
        $res = $aNum + $bNum;
        break;
    case '-':
        $res =$aNum - $bNum;
        break;
    case '*':
        $res = $aNum * $bNum;
        break;
	case '/':
        $res = $aNum / $bNum;
        break;	
}
		echo ($res);
}
?>