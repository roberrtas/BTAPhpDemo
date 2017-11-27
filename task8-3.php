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
        $mokiniai = [ 
            ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7],
            'anglu' => [6, 7, 8], 'matematika' => [3, 5, 4]]],
            ['vardas' => 'Ona', 'pazymiai' =>  ['lietuviu' => [10, 9, 10], 
            'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]],
        ];

        function getAverage($pazymiai) {
            $sum = 0;
            foreach($pazymiai as $pazymys) {
                $sum += $pazymys;
            }
            return $sum / count($pazymiai);
        }

        foreach($mokiniai as $mokinys) {
            $lietuviuVid = getAverage($mokinys['pazymiai']['lietuviu']);
            $angluVid = getAverage($mokinys['pazymiai']['anglu']);
            $matematikaVid = getAverage($mokinys['pazymiai']['matematika']);
            echo $mokinys['vardas'] . " " . 
            round(($lietuviuVid + $angluVid + $matematikaVid) / count($mokinys['pazymiai'])) 
            . "<br>";
        }

        echo "Geriausiai mokosi Ona."
    ?>
</body>
</html>