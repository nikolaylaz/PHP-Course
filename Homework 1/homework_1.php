<?php
function is_prime($num=0)
{ 
	$num = (int)$num;
	if($num > 0)
	{
		$count = 0;
		$half = round($num / 2);

		for($i=2;$i<=$half;$i++)
		{
				if(($num % $i) == 0)

				{
						$count++;
				}
	}
		if($count > 0)
		{
			return false;
		} 
		else {
			return true;
		}
	}	 
	else {
		return false;
	} 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<style type="text/css">
		span {
			color:red;
		}
	</style>
</head>
<body>

<?php 
	$num = $_GET['number'];
	if(!is_numeric($num)) {
		echo "<span>The parameter is not a number</span>";
	}
	elseif(!($num >= 0 && $num <= 19999)) {
		echo"<span>The parameter is not within the range [0,19999]</span>";
	}
	elseif(is_prime($num)) {
		echo "The number {$num} is prime !";
	}
	else {
		echo "The number {$num} is NOT prime!";
	}
?>
</body>
</html>