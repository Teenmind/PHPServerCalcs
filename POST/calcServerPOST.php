<?php
$aNum = $_POST['num1'];
$bNum = $_POST['num2'];
$oP = $_POST['opr'];

 calc($aNum, $bNum, $oP);

function calc($aNum, $bNum, $oP)
{
	switch ($oP) 
	{
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