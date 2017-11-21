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
        echo "<h4><br>task7-1<br></h4>";
        $a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];

        for($i = 0; $i < count($a) - 1; $i++) {
            for($j = $i + 1; $j < count($a); $j++) {
                echo $a[$i] . "-" . $a[$j] . "<br>";
            }
        }

        echo "<h4><br>task7-2<br></h4>";

        for($i = 0; $i < count($a); $i++) {
            for($j = 0; $j < count($a); $j++) {
                if($i != $j){
                    echo $a[$i] . "-" . $a[$j] . "<br>";
                }
            
            }
        }
    ?>
</body>
</html>