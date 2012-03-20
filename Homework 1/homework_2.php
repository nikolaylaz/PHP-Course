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

$arr = range (200,1000,37);
function find_3_prime() {
	global $arr;
	$primes_count = 0;
	foreach($arr as $elem) {
		if(is_prime($elem)) {
			$primes_count++;
			if($primes_count == 3) {
				return $elem;
			}	
		}
	}
}

function check_exists() {
	global $arr;
	$check_numbers = array(146,284,871);
	foreach($check_numbers as $elem) {
		if(!in_array($elem,$arr)) {
			echo "The number {$elem} [does not] exist in the array <br />";
		}
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
		print_r(find_3_prime());
		echo "<br />";
		print_r($arr);
		echo "<br />";
		print_r(check_exists());
	?>

</body>
</html>