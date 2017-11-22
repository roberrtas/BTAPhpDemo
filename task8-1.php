<!DOCTYPE html>
<html>
  <head>
    <title>Pavadinimas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
      $zmones = array(
        array('vardas' => 'Jonas', 'lytis' => 'V'),
        array('vardas' => 'Ona', 'lytis' => 'M'),
        array('vardas' => 'Petras', 'lytis' => 'V'),
        array('vardas' => 'Marytė', 'lytis' => 'M'),
        array('vardas' => 'Eglė', 'lytis' => 'M')
    );

    ?>
    <h1>Zmones <?php echo count($zmones);?></h1>
    <?php if ($zmones): ?>
      <table>
        <tr>
          <th>Nr.</th><th>Vardas</th><th>Lytis</th>
        </tr>
        <?php foreach($zmones as $k => $v): ?>
          <tr>
            <td><?php echo $k ?></td>
            <td><?php echo $v['vardas'] ?></td>
            <td><?php echo $v['lytis'] ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php else: ?>
      <p>Nera duomenu</p>
    <?php endif; ?>


    <?php 
        $zmones = [
            ['vardas' => 'Jonas', 'lytis' => 'V'],
            ['vardas' => 'Ona', 'lytis' => 'M'],
            ['vardas' => 'Petras', 'lytis' => 'V'],
            ['vardas' => 'Marytė', 'lytis' => 'M'],
            ['vardas' => 'Eglė', 'lytis' => 'M']
        ];

        for($i = 0; $i < count($zmones) - 1; $i++) {
            for($j = $i + 1; $j < count($zmones); $j++) {
                if($zmones[$i]['lytis'] != $zmones[$j]['lytis']) {
                    echo $zmones[$i]['vardas'] . "-" . $zmones[$j]['vardas'] . "<br>";
                }
                
            }
        }
    ?>
  </body>
</html>