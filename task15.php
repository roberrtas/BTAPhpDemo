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
    // create new  record
    if(isset($_POST['submit'])) {
        $date = $_POST['date'];
        $number = $_POST['number'];
        $distance = $_POST['distance'];
        $time = $_POST['time'];

        $sql = "INSERT INTO radars(date, number, distance, time) 
                VALUES ('$date', '$number', '$distance', '$time')";

        $result = $connection->query($sql);
        if(!$result){
            die("Failed: " . $connection->error);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>data</title>
</head>
<body class="container">
    <h1>Insert new row</h1>
    <form action="task15.php" method="post">
        <label for="date">Date</label>
        <input type="datetime-local" name="date" required>
        <label for="number">Number</label>
        <input type="text" name="number" required>
        <label for="distance">Distance</label>
        <input type="int" name="distance" required>
        <label for="time">Time</label>
        <input type="int" name="time" required>
        <br><br>
        <button class="btn btn-primary" type="submit" name="submit">Insert</button>
    </form>
    <br>
    <h1>Update row</h1>
    <?php
        //update one of the records
        if(isset($_POST['submit1'])) {
            $id = $_POST['id'];
            $date = $_POST['date'];
            $number = $_POST['number'];
            $distance = $_POST['distance'];
            $time = $_POST['time'];
    
            $sql = "UPDATE radars
                    SET date = '$date', 
                        number = '$number', 
                        distance = '$distance', 
                        time = '$time' 
                    WHERE id=$id";
    
            $result = $connection->query($sql);
            if(!$result){
                die("Failed: " . $connection->error);
            }
        }
    ?>
    <form action="task15.php" method="post">
        <label for="date">Date</label>
        <input type="datetime-local" name="date" required>
        <label for="number">Number</label>
        <input type="text" name="number" required>
        <label for="distance">Distance</label>
        <input type="int" name="distance" required>
        <label for="time">Time</label>
        <input type="int" name="time" required>
        <br>
        <?php
            // show all records from DB in dropdown
            $sql = "SELECT * FROM `radars` ORDER BY `id` ASC";
            $result = $connection->query($sql);

            if(!$result){
                die("Failed: " . $connection->mysqli_error);
            }
        ?>
            <br>
            <select name="id" id="">
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $date = $row['date'];
                        $number = $row['number'];
                        $distance = $row['distance'];
                        $time = $row['time'];
                        echo "<option value='$id'>
                                id=$id; date=$date; number=$number; distance=$distance; time=$time;
                             </option>";
                    }
                ?>
            </select>
            <br><br>
            <button class="btn btn-warning" type="submit" name="submit1">Update</button>
            <br><br>
    </form>
    <?php
        // print all records from DB
        $query = 'SELECT *, `distance` / `time` * 3.6 AS `speed` 
        FROM `radars` ORDER BY `id` ASC';
    
        if(!($result = $connection->query($query))) {
            die("Error: " . $connection->error);
        }
    ?>
    <?php if($result->num_rows > 0): ?>
        <table class="table table-bordered">
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
    <?php else: echo "DB nera duomenu." ?>
    <?php endif; ?>
    <?php $connection->close(); ?>
</body>
</html>