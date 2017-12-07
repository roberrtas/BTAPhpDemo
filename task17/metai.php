<?php
    $servername = 'localhost';
    $dbname = 'auto';
    $username = 'Auto';
    $password = 'LabaiSlaptas123';

    //create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    $query = 'SELECT YEAR(`date`) AS metai, 
            COUNT(YEAR(`date`)) AS kiekis,
            ROUND(MAX(`distance` / `time` * 3.6)) AS maxGreitis,
            ROUND(MIN(`distance` / `time` * 3.6)) AS minGreitis, 
            ROUND(AVG(`distance` / `time` * 3.6)) AS vidGreitis
            FROM `radars`
            GROUP BY YEAR(`date`)';

    if(!($result = $connection->query($query))) {
        die("Error: " . $connection->error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">
<h1>Metai</h1>
<table class="table table-bordered">
        <tr>
            <th>Metai</th>
            <th>Irasu kiekis</th>
            <th>Max auto greitis</th>
            <th>Min auto greitis</th>
            <th>Vid auto greitis</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        
        <tr>
            <td><?php echo $row['metai'] ?></td>
            <td><?php echo $row['kiekis'] ?></td>
            <td><?php echo $row['maxGreitis'] ?></td>
            <td><?php echo $row['minGreitis'] ?></td>
            <td><?php echo $row['vidGreitis'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a class="btn btn-default" href="task17.php">Pradzia</a>
    <br><br>
</body>
</html>