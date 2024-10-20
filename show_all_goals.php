<?php include('db_connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $query="SELECT * FROM `goals`";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        ?>
      <div>
        <?php echo $row['title'] ;; ?>
        <button class="btn btn-primary"><a href="update_goals.php?id=<?php echo $row['id']; ?>">UPDATE</a></button>
        <button class="btn btn-danger"><a href="delete_goals.php?id=<?php echo $row['id']; ?>">DELETE</a></button>
        <div>
            <br>
        </div>
      </div>

        <?php
    }
    ?>
</body>
</html>