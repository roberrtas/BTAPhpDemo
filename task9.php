<?php
    class Mokinys
    {
        public $vardas;
        public $pavarde;
        public $trimestras;

        function __construct($vardas, $pavarde, $trimestras) {
            $this->vardas = $vardas;
            $this->pavarde = $pavarde;
            $this->trimestras = $trimestras;
        }
        
        function getAverage($pazymiai) {
            $sum = 0;
            foreach($this->trimestras as $vidurkis) {
                $sum += $vidurkis;
            }
            return $sum / count($this->trimestras);
        }
    }
    
    $mokiniai = [
        new Mokinys('Jonas', 'Jonaitis', ['anglu' => 10, 'matematika' => 10, 'lietuviu' => 8]),
        new Mokinys('Petras', 'Petraitis', ['anglu' => 6, 'matematika' => 9, 'lietuviu' =>9]),
        new Mokinys('Ona', 'Onaite', ['anglu' => 8, 'matematika' => 8, 'lietuviu' => 10])
    ];    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Trimestras</th>
        </tr>
        <?php foreach($mokiniai as $mokinys):?>
        <tr>
            <td>
                <?php echo $mokinys->vardas; ?>
            </td>
            <td>
                <?php echo $mokinys->pavarde; ?>
            </td>
            <td>
                <?php echo round($mokinys->getAverage($mokinys->trimestras), 1); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>