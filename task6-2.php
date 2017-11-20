<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task5-3</title>
</head>
<body>
    <?php
        function deviders($number) {
			$numArray = [];
			for ($i=1; $i < $number; $i++) { 
				if ($number % $i == 0) {
					$numArray[] = $i; 
				}
			};
			foreach ($numArray as $arr) {
				echo "<pre>$arr</pre>";
			};
		}

		deviders(10);

		function isPerfect($num) {
			for ($i=1; $i <= $num ; $i++) { 
				if ($num % $i == 0) {
					$arrfactor[] = $i;
				}
			}
			return ($num == array_sum($arrfactor) / 2) ? "true" : "false";
		}
		echo isPerfect(10);
    ?>
</body>
</html>