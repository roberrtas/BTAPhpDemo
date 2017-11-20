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
        $a = [3, 4, 5];
		$b = [2, 10, 8];
		$c = [5, 6, 5];
		$d = [5, 5, 5];

		if ($d[0] && $d[1] && $d[2] > 0) {	
			if ($d[0] == $d[1]) {
				if ($d[0] == $d[2]) {
					echo "trikampis lygiakrastis";
				}
			} elseif ($d[0] == $d[2]) {
				echo "trikampis lygiasonis";
			} else {
				echo "trikampis ivairiakrastis";
            }
        }
    ?>
</body>
</html>