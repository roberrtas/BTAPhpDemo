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

    // print records from DB
    $query = 'SELECT r.`driverId`, `name`, ROUND(MAX(`distance`/`time` * 3.6)) AS `maxGreitis` 
              FROM `radars` r
              JOIN `drivers` d ON r.`driverId` = d.`driverId`
              GROUP BY r.`driverId`, `name`
              ORDER BY `maxGreitis` DESC';

    if(!($result = $connection->query($query))) {
        die("Error: " . $connection->error);
    }
?>

<?php if($result->num_rows > 0): ?>
    <table border=1">
        <tr>
            <th>driverId</th>
            <th>name</th>
            <th>maxGreitis km/h</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['driverId'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['maxGreitis'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php else: echo "DB nera duomenu." ?>
<?php endif; ?>
<?php $connection->close(); ?>