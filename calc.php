<?php

	include 'includes/calc.inc.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$num1=$_POST["num1"];
		//echo $num1.'<br>';
		$num2=$_POST["num2"];
		//echo $num2.'<br>';
		$cal=$_POST["cal"];
		//echo $cal.'<br>';

		$calculator=new Calc($num1,$num2,$cal);
		echo $calculator->caclMethod();
	}
?>
