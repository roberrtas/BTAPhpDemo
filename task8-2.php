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
        $zmones = [
            ['vardas' => 'Jonas', 'lytis' => 'V'],
            ['vardas' => 'Ona', 'lytis' => 'M'],
            ['vardas' => 'Petras', 'lytis' => 'V'],
            ['vardas' => 'Marytė', 'lytis' => 'M'],
            ['vardas' => 'Eglė', 'lytis' => 'M']
        ];

        for($i = 0; $i < count($zmones) - 2; $i++) {
            for($j = $i + 1; $j < count($zmones) - 1; $j++) {
                for($k = $j + 1; $k < count($zmones); $k++) {
                    if($zmones[$i]['lytis'] != $zmones[$j]['lytis'] || 
                    $zmones[$i]['lytis'] != $zmones[$k]['lytis']) {
                        echo $zmones[$i]['vardas'] . "- " . $zmones[$j]['vardas'] 
                        . "- " . $zmones[$k]['vardas'] . "<br>";
                    }
                }
            }
        }
    ?>
</body>
</html>