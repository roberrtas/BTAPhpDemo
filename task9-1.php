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
            'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
            ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10],
            'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
        ];

        function getAverage($pazymiai) {
            $sum = 0;
            foreach($pazymiai as $pazymys) {
                $sum += $pazymys;
            }
            return $sum / count($pazymiai);
        }

        // function averages($mokinys) {
        //     $trimestras = [];
        //     foreach($mokinys['pazymiai'] as $dalykas => $pazymiai) {
        //         $vidurkis = getAverage($pazymiai);
        //         $trimestras[$dalykas] = $vidurkis;
        //     }
        //     $mokinys['trimestras'] = $trimestras;
        // }
    ?>

    <table border = "1">
        <tr>
            <th>Vardas</th>
            <th>Lietuvių k.</th>
            <th>Lietuvių k. vid.</th>
            <th>Anglų k.</th>
            <th>Anglų k. vid.</th>
            <th>Matematika</th>
            <th>Matematika vid.</th>
            <th>Bendras vid.</th>
        </tr>
        <?php foreach($mokiniai as $mokinys):?>
        <tr>
            <td>
                <?php echo $mokinys['vardas']; ?>
            </td>
            <td>
                <?php foreach($mokinys['pazymiai']['lietuviu'] as $pazymys): ?>
                    <?php echo $pazymys; ?>
                <?php endforeach; ?>
            </td>
            <td align="center">
                <?php echo round(getAverage($mokinys['pazymiai']['lietuviu']));  ?>
            </td>
            <td>
                <?php foreach($mokinys['pazymiai']['anglu'] as $pazymys): ?>
                    <?php echo $pazymys; ?>
                <?php endforeach; ?>
            </td>
            <td align="center">
                <?php echo round(getAverage($mokinys['pazymiai']['anglu']));  ?>
            </td>
            <td>
                <?php foreach($mokinys['pazymiai']['matematika'] as $pazymys): ?>
                    <?php echo $pazymys; ?>
                <?php endforeach; ?>
            </td>
            <td align="center">
                <?php echo round(getAverage($mokinys['pazymiai']['matematika']));  ?>
            </td>
            <td align="center">
                <?php $vid = round((round(getAverage($mokinys['pazymiai']['lietuviu'])) + 
                round(getAverage($mokinys['pazymiai']['anglu'])) + 
                round(getAverage($mokinys['pazymiai']['matematika']))) / 
                count($mokinys['pazymiai']));?>
                <?php echo $vid;  ?>
            </td>            
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>