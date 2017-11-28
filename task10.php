<?php
    class Mokinys
    {
        public $vardas;
        public $gimimoData;

        function __construct($vardas, $gimimoData) {
            $this->vardas = $vardas;
            $this->gimimoData = $gimimoData;
        }

        function metai() {
            $gd = new DateTime($this->gimimoData);
            $now = new DateTime();

            $diff = $gd->diff($now);
            return $diff->y;
        }
    }

    $mokiniai = [
        new Mokinys('Antanas', '1992-02-05'),
        new Mokinys('Ona', '1999-02-05'),
        new Mokinys('Jonas', '1998-01-01'),
        new Mokinys('Petras', '2001-02-05')        
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
            <th>Data</th>
            <th>Amzius</th>
        </tr>
        <?php foreach($mokiniai as $mokinys):?>
        <tr>
            <?php if($mokinys->metai() >= 18): ?>
            <td>
                <?php echo $mokinys->vardas; ?>
            </td>
            <td>
                <?php echo $mokinys->gimimoData; ?>
            </td>
            <td>
                <?php echo $mokinys->metai(); ?>
            </td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>