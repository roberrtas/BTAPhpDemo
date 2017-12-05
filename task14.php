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

    $page = 9;

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    if($page < 9) {
        $page = 9;
    }

    if(isset($_GET['offset'])) {
        $offset = $_GET['offset'];
    } else {
        $offset = 0;
    }

    $query = 'SELECT *, `distance` / `time` * 3.6 AS `speed` 
    FROM `radars` ORDER BY `id` ASC LIMIT ' . ($page + 1) . ' OFFSET ' . $offset;

    if(!($result = $connection->query($query))) {
        die("Error: " . $connection->error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data</title>
</head>
<body>
<?php if($result->num_rows > 0): ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Number</th>
            <th>Distance</th>
            <th>Time</th>
            <th>Speed km/h</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['number'] ?></td>
            <td><?php echo $row['distance'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo round($row['speed'], 1) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php if($offset > 0): ?>
        <a href="<?= "?offset=".($offset >= $page ? $offset - $page : 0) ?>">Atgal</a>
    <?php endif ?>
    <?php if($result->num_rows == $page + 1): ?>
        <a href="<?= "?offset=".($offset + $page) ?>">Pirmyn</a>
    <?php endif; ?>
<?php else: echo "Nera duomenu DB" ?>
<?php endif; ?>
<?php $connection->close(); ?>
</body>
</html>