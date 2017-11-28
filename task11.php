<?php
class Radar
{
    public $date;
    public $number;
    public $distance;
    public $time;

    function __construct($date, $number, $distance, $time) {
        $this->date = $date;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;
    }

    function greitis() {
        $g = $this->distance / $this->time;
        return $g;
    }

    function mtokm() {
        $g = $this->distance / $this->time;
        $gKmh = $g / 3.6;
        return round($gKmh, 1);
    }
}

$auto = [
    new Radar('2000', '888', '10000', '600'),
    new Radar('2005', '999', '5000', '150'),
    new Radar('1996', '333', '1000', '120')
];

usort($auto, function($a, $b){
    $greitisA = $a->greitis();
    $greitisB = $b->greitis();

    return $greitisA == $greitisB ? 0 : $greitisA < $greitisB ? 1 : -1;
});
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
            <th>Atstumas m</th>
            <th>Laikas s </th>
            <th>Greitis m/s</th>
            <th>Greitis km/h</th>
        </tr>
        <?php foreach($auto as $car): ?>
        <tr>
            <td>
                <?php echo $car->distance ?>
            </td>
            <td>
                <?php echo $car->time ?>
            </td>
            <td>
                <?php echo round($car->greitis(), 1); ?>
            </td>
            <td>
                <?php echo $car->mtokm(); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>