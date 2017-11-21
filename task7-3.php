<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $a = [ [1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1] ];
        $sum = [];
        foreach($a as $row) {
            // var_dump($row);
            foreach ($row as $column => $value) {
                // var_dump($value);
                // echo $value;
                $sum[] += $value;
                // var_dump($sum);
                echo max($sum);
            }
        }
    ?>
</body>
</html>