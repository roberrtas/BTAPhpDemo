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
class Zmogus 
{
    public $vardas;
    public $pavarde;

    function __construct($vardas, $pavarde) {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }
}

$zmogus1 = new Zmogus('Jonas', 'Jonaitis');
$zmogus2 = new Zmogus('Petras', 'Petraitis');
$zmogus3 = new Zmogus('Vardenis', 'Pavardenis');

$zmones = [$zmogus1, $zmogus2, $zmogus3];
?>

<table border = "1">
    <tr>
        <td>Vardas</td><td>Pavarde</td>
    </tr>
    <?php foreach($zmones as $zmogus):?>
    <tr>
        <td><?php echo $zmogus->vardas; ?></td>
        <td><?php echo $zmogus->pavarde; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>