<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task6-1</title>
</head>
<body>
    <?php
        function getAverage($arrAve) {
            $sum = array_sum($arrAve);
            $count = count($arrAve);
            $ave = $sum / $count;
            return $ave;
        }
        $a = [5, 6, 10, 15];
        $b = [8, 5, 3, 25];

        $a1 = getAverage($a);
        $b1 = getAverage($b);
        echo $a1 - $b1;
    ?>
</body>
</html>